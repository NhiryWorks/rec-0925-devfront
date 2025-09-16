import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
  const radios = document.querySelectorAll('input[name="plan"]');

  // Associer chaque valeur à une couleur de bordure + entête
  const colors = {
    basic: { border: '#e5e6e8', header: '#e5e6e8', text: '#2C2C2C' },
    assurance: { border: '#0DBC0D', header: '#0DBC0D', text: '#2C2C2C' },
    complet: { border: '#36578A', header: '#36578A', text: '#fff' }
  };

  function applySelection() {
    radios.forEach(r => {
      const card = r.closest('article');
      const header = card.querySelector('div:first-child');

      // reset style
      card?.classList.remove('border-4');
      card?.style.removeProperty('border-color');
      header?.style.removeProperty('background-color');
      header?.style.removeProperty('color');
    });

    const active = document.querySelector('input[name="plan"]:checked');
    if (!active) return;

    const activeCard = active.closest('article');
    const header = activeCard.querySelector('div:first-child');
    const scheme = colors[active.value] || { border: '#000', header: '#000', text: '#fff' };

    // applique la bordure
    activeCard?.classList.add('border-4');
    activeCard.style.borderColor = scheme.border;

    // applique le fond + couleur du texte de l'entête
    if (header) {
      header.style.backgroundColor = scheme.header;
      header.style.color = scheme.text;
    }
  }

  // init + écouteurs
  applySelection();
  radios.forEach(r => r.addEventListener('change', applySelection));
});



