import { initWaveform } from "./_waveform";
import { initTime } from "./_time";
import { initPlayback } from "./_playback";

export let AudioPlayer;

class audioPlayer {
  constructor(container, waveform, activeArchive, autoplay){
    this.container = container;
    this.waveform = waveform;
    this.activeArchive = activeArchive;
    this.autoplay = autoplay;
    this.isArchive = Boolean(activeArchive);
  }
  init() {
    initTime(this.waveform);
    initPlayback(this.waveform);
    if (this.autoplay) {
      this.waveform.play();
    }
  }
}

export const initAudioPlayer = (audioplayer, activeArchive, autoplay) => {
  if (activeArchive !== null) { 
    audioplayer.dataset.audio = activeArchive.dataset.audio; 
    audioplayer.dataset.waveform = activeArchive.dataset.waveform; 
  }

  if(AudioPlayer !== undefined) {
    AudioPlayer.activeArchive.querySelector('.archive__item__play').style.opacity = 1;
    AudioPlayer.activeArchive.querySelector('.audioplayer__play-state').classList.remove('fa-pause');
    AudioPlayer.activeArchive.querySelector('.audioplayer__play-state').classList.add('fa-play');
  }
  
  AudioPlayer = new audioPlayer(audioplayer, null, activeArchive, autoplay);
  loadingStateStyling();
  
  initWaveform(audioplayer).then( waveform => {
    AudioPlayer.waveform = waveform;
    AudioPlayer.init();
    playingStateStyling();
  });
}


const loadingStateStyling = () => {
  document.body.classList.remove('no-track');
  document.body.classList.add('is-playing');
  document.body.classList.add("audio-loading");
  AudioPlayer.container.querySelector(".audioplayer__loading").style.opacity = "0.25";
  AudioPlayer.container.parentNode.classList.add('is-active');
  if (AudioPlayer.isArchive) {   
    AudioPlayer.activeArchive.querySelector('.archive__item__play').style.opacity = '0.25';
  }
}

const playingStateStyling = () => {
  AudioPlayer.container.querySelector(".audioplayer__loading").style.opacity = "0";
  document.body.classList.remove("audio-loading");
  if (AudioPlayer.isArchive) {   
    AudioPlayer.activeArchive.querySelector('.archive__item__play').style.opacity = '1';
  }
}





