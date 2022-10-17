import { AudioPlayer } from './audioplayer';

export const iconToPause = icon => { icon.classList.remove("fa-play"); icon.classList.add("fa-pause") };
export const iconToPlay = icon => { icon.classList.remove("fa-pause"); icon.classList.add("fa-play") };

const stateChange = waveform => {
  const projectHeaderIcon = document.querySelector('.project__header .audioplayer__flash');
  const audioPlayerIcon = document.querySelector('.audioplayer .audioplayer__play-state');
    waveform.isPlaying() ? iconToPause(audioPlayerIcon) : iconToPlay(audioPlayerIcon);

  if (AudioPlayer.isArchive) {
    const archiveItemIcon = AudioPlayer.activeArchive.querySelector('.archive__item__play i');
    waveform.isPlaying() ? iconToPause(archiveItemIcon) : iconToPlay(archiveItemIcon);
  }

  // If project header exists. 
  if (projectHeaderIcon != null) {
    const projectHeaderStateChange = () => {
      waveform.isPlaying() ? iconToPlay(projectHeaderIcon) : iconToPause(projectHeaderIcon);
      projectHeaderIcon.classList.add('flash');
      setTimeout(() => {
        projectHeaderIcon.classList.remove("flash");
      }, 500);
    }
    projectHeaderStateChange();
  }
}

export const initPlayback = waveform => {  

  waveform.on("seek", e => { 
    // console.log(e) 
    waveform.play();
  });
  waveform.on("play", e => { stateChange(waveform) });
  waveform.on("pause", e => { stateChange(waveform) });
  waveform.on("finish", e => {
    // waveform.stop();
    waveform.pause();
  });
  waveform.on("audioprocess", e => {
    // console.log(e);
  })



  // Play Buttons.
  document.querySelectorAll('.audioplayer__play').forEach(playButton => {
    playButton.addEventListener('click', e => {
      e.preventDefault();
      waveform.playPause();
    })
  });

  // Stop Buttons.
  document.querySelectorAll('.audioplayer__stop').forEach(playButton => {
    playButton.addEventListener('click', e => {
      e.preventDefault();
      waveform.stop();
    })
  });


  // Keyboard Events.
  document.body.onkeydown = function (e) {
    if (e.keyCode == 32) {
      e.preventDefault();
      waveform.playPause();
    }
  }


}