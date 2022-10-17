// Layout Images
import imagesLoaded from 'imagesLoaded';
import Masonry from "masonry-layout";
import InfiniteScroll from 'infinite-scroll';
import {initAudioPlayer, AudioPlayer} from './audioplayer/audioplayer';
const archive = document.querySelector(".archive");
let msnry;


const loadPagination = () => {
  const infScroll = new InfiniteScroll(".archive", {
    path: ".pagination a.next",
    append: ".archive__item",
    checkLastPage: true,
    prefill: false,
    responseType: "document",
    outlayer: false,
    scrollThreshold: 400,
    elementScroll: false,
    loadOnScroll: true,
    history: false,
    historyTitle: false,
    hideNav: ".pagination",
    status: undefined,
    button: undefined,
    onInit: function() {},
    debug: false
  });
  infScroll.on('append', function( response, path, items ) {
    msnry.appended([...items]);
    initArchiveItems(archive.querySelectorAll('.archive__item'));
  });
};

const initArchiveItems = items => {
  items.forEach(item => {
    item.style.opacity = "1";
  });
  archive.querySelectorAll('.archive__item__play').forEach( playButton => {
    archivePlayButtonClickEvent(playButton);
  });

}
const layoutArchiveItems = () => {
  document.querySelector('.archive__loading').remove();
  msnry = new Masonry(archive, {
    itemSelector: ".archive__item",
    transitionDuration: 0,
    fitWidth: true,
    columnWidth: 20
  });
  initArchiveItems(archive.querySelectorAll('.archive__item'));
}

// Archive Item Click.
const archivePlayButtonClickEvent = playButton => {
  if (playButton.dataset.loaded) return;
  playButton.dataset.loaded = true;

  playButton.addEventListener('click', e => {
    const audioplayer = document.querySelector('.audioplayer--archive .audioplayer');
    const activeArchive = playButton.closest(".archive__item");
    e.preventDefault();
    if (AudioPlayer === undefined) {
      initAudioPlayer(audioplayer, activeArchive, true);
    } else {
      if (activeArchive === AudioPlayer.activeArchive) {
        AudioPlayer.waveform.playPause();
      } else {
        if (AudioPlayer.waveform !== null) {          
          AudioPlayer.waveform.pause();
          AudioPlayer.waveform.destroy();
          initAudioPlayer(audioplayer, activeArchive, true);
        }
      }
    }
  })
}

// Archive Init.
if (archive != null) {
  imagesLoaded(archive, layoutArchiveItems);
  if (document.body.classList.contains('template__home')) {
    loadPagination();
  }
}
