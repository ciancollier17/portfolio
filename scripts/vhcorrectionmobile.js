function calculateVh() {
  document.documentElement.style.setProperty('--vh', `${window.innerHeight / 100}px`);
}

calculateVh();
window.addEventListener('resize', calculateVh);
