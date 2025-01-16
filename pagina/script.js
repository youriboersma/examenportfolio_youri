document.addEventListener('DOMContentLoaded', () => {
  const interBubble = document.querySelector('.interactive');

  if (!interBubble) {
    console.error('Het .interactive element is niet gevonden.');
    return;
  }

  let curX = 0;
  let curY = 0;
  let tgX = 0;
  let tgY = 0;

  const move = () => {
    curX += (tgX - curX) / 40;  // Snelheid van de beweging
    curY += (tgY - curY) / 20;

    // Toepassen van translate met de afgeronde waarden
    interBubble.style.transform = `translate(${Math.round(curX)}px, ${Math.round(curY)}px)`;
    requestAnimationFrame(move);
  };

  window.addEventListener('mousemove', event => {
    const bubbleRect = interBubble.getBoundingClientRect();

    // Pas de muis coördinaten aan om de "bubbel" te centreren
    tgX = event.clientX - (bubbleRect.width / 2);
    tgY = event.clientY - (bubbleRect.height / 8);
  });

  move();
});

function goBack() {
  window.history.back();
}

