import WaveSurfer from "wavesurfer.js";

export const initWaveform = (audioplayer) => {
  const waveformJSON = audioplayer.dataset.waveform;

  return new Promise((resolve) => {
    const track_URL = audioplayer.dataset.audio;
    const container = audioplayer.querySelector(".audioplayer__timeline");
    const waveform = WaveSurfer.create({
      container: container,
      waveColor: "#fff",
      progressColor: "#000",
      backend: "MediaElement",
      barGap: 2,
      barWidth: 1,
      barHeight: 3,
      partialRender: false,
      responsive: true,
      interpolate: false,
      // interact: false,
      height: 20,
    });

    waveform.on("ready", function () {
      setTimeout(() => {
        resolve(waveform);
      }, 500);
    });
    // waveform.load(track_URL);
    fetch(waveformJSON)
      .then((response) => {
        if (!response.ok) {
          throw new Error("HTTP error " + response.status);
        }
        return response.json();
      })
      .then((peaks) => {
        waveform.load(track_URL, peaks.data);
        waveform.cancelAjax();
      })
      .catch((e) => {
        console.error("error", e);
      });
  });
};
