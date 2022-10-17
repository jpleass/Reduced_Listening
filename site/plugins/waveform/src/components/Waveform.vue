<template>

  <k-field class="waveform" :label="label">
    <k-input
        v-model="value"
        theme="field"
        :options="items"
        name="select"
        type="select"
        @input="selectAudio"
    />
  <k-text class="margin-top" v-if="hasValue">
    Waveform loaded.
  </k-text>
  <k-progress class="progress" />
  <div class="audioplayer"></div>
  </k-field>
</template>

<script>
// import WaveSurfer from "wavesurfer.js";
import WaveformData from 'waveform-data';

export default {
  props: {
    label: String,
    value: String,
    disabled: String

  },
  data: function(){
    return {
      items: [],
      audioProgress: 0,
      hasValue: false
    }
  },
  created: function() {
    this.load();
    if(this.value !== null) {
      this.hasValue = true;
    }
  },
  methods: {
    load() {
      this.$api
        .get("pages/archive+the-signal-man/files")
        .then(audio => {
          audio.data.forEach(child => {
            if (child.extension !== 'mp3') return;           
              const audioFile = { 
                value: child.id, 
                text: child.filename,
                url: child.url
              }
              this.items.push(audioFile);
          })
        });
    },
    async selectAudio(value){
      const self = this;
      const result = this.items.filter(obj => { return obj.value === value })
      const trackURL= result[0].url;
      const audioContext = new AudioContext();
 
      fetch(trackURL)
        .then(response => response.arrayBuffer())
        .then(buffer => {
          const options = {
            audio_context: audioContext,
            array_buffer: buffer,
            scale: 2048
          };
      
          return new Promise((resolve, reject) => {
            WaveformData.createFromAudio(options, (err, waveform) => {
              if (err) {
                reject(err);
              }
              else {
                resolve(waveform);
              }
            });
          });
        })
        .then(waveform => {
          const scaleY = (amplitude, height) => {
            const range = 256;
            const offset = 128;
            return height - ((amplitude + offset) * height) / range;
          }
          const channel = waveform.channel(0);
          const waveformData = [];
          
          for (let x = 0; x < waveform.length; x++) {
            const val = channel.max_sample(x);
            waveformData.push(scaleY(val, 20)/10);
          }
          console.log(waveform);
          console.log(waveformData);
          
        });
    }
  }
};
</script>

<style lang="scss">
  .audioplayer {
    margin-top: 1em;
    pointer-events: none;
  }
  .margin-top {
    margin-top: 1em;
  }
</style>
