// import $ from 'jquery';
import '@fancyapps/fancybox';
import {initAudioPlayer} from './audioplayer/audioplayer';

document.querySelectorAll('.project__header').forEach( projectHeader => {
  const hiResImage = new Image();
  hiResImage.onload = () => {
    projectHeader.style.background = `url('${hiResImage.src}') no-repeat center center black`;
  }
  hiResImage.src = projectHeader.dataset.src;
})


// Check for audioplayer with autoload.

window.onload = () => {
  document.querySelectorAll(".audioplayer").forEach(audioplayer => {
    if (audioplayer.dataset.audio == false) {
      document.body.classList.add('no-track');
    } else {
      initAudioPlayer(audioplayer, null, false);
    }
  });
}
