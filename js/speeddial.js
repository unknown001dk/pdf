const $parentEl = document.getElementById('dialParent');

const $triggerEl = document.getElementById('dialButton');

const $targetEl = document.getElementById('dialContent');

const options = {
    triggerType: 'click',
    onHide: () => {
        console.log('speed dial is shown');
    },
    onShow: () => {
        console.log('speed dial is hidden');
    },
    onToggle: () => {
        console.log('speed dial is toggled');
    },
};

const instanceOptions = {
  id: 'dialContent',
  override: true
};