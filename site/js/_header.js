import _ from 'underscore';

const updatePosition = () => {
  const fromTop = window.scrollY;
  fromTop > 100 ? document.body.classList.add('down') : document.body.classList.remove('down');
}
var throttled = _.throttle(updatePosition, 100);
window.addEventListener('scroll', throttled);
