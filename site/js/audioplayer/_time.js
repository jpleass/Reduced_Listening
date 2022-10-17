import { AudioPlayer } from './audioplayer';

const secondsToMinutes = seconds => {
  var hrs = ~~(seconds / 3600);
  var mins = ~~((seconds % 3600) / 60);
  var secs = ~~seconds % 60;
  var ret = "";
  if (hrs > 0) {
    ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
  }
  ret += "" + mins + ":" + (secs < 10 ? "0" : "");
  ret += "" + secs;
  return ret;
};

const formatMillisecondsText = milliseconds => {
  var hours = Math.floor(milliseconds / 3600000);
  milliseconds = milliseconds % 3600000;
  var minutes = Math.floor(milliseconds / 60000);
  milliseconds = milliseconds % 60000;
  var seconds = Math.floor(milliseconds / 1000);
  milliseconds = Math.floor(milliseconds % 1000);

  if (hours == 0) {
    return +
      (minutes < 10 ? '0' : '') + minutes + ' minutes, ' +
      (seconds < 10 ? '0' : '') + seconds + ' seconds.'
  }
  else {
    return + hours + "hour " +
      (minutes < 10 ? '0' : '') + minutes + ' minutes, ' +
      (seconds < 10 ? '0' : '') + seconds + ' seconds.'
  }
}

const setDuration = waveform => {
  const durationEl = document.querySelector(".audioplayer__duration");
  const metaDuration = document.getElementById('LengthOfPiece');
  AudioPlayer.audioDuration = waveform.getDuration();
  durationEl.innerText = secondsToMinutes(AudioPlayer.audioDuration);
  if (metaDuration !== null) {
    metaDuration.innerText = formatMillisecondsText(AudioPlayer.audioDuration*1000);
  }
};

const setCurrent = time => {
  const currentEl = document.querySelector(".audioplayer__current");
  currentEl.innerText = secondsToMinutes(time);
};


export const initTime = waveform => {
  waveform.on("audioprocess", time => {
    setCurrent(time);
  });
  setDuration(waveform);
}