// efcto de carag lodader
    window.addEventListener('load', () => {
      setTimeout(() => {
        const loader = document.getElementById('loader');
        if(loader){ loader.style.opacity = '0'; loader.style.transition = 'opacity .6s ease';
          setTimeout(()=> loader.remove(), 650);
        }
      }, 1800);
    });


    //animaciones de secciones
    (function(){
      const sections = Array.from(document.querySelectorAll('section.section-card, .actions'));
      const dirs = ['left','right','up','down'];
      sections.forEach((sec, i) => sec.setAttribute('data-anim', dirs[i % dirs.length]));

      const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
      }, { threshold: .16 });
      sections.forEach(el => io.observe(el));
    })();

    // animacion de luz
    (function(){
      const lb = document.getElementById('lightbox');
      const lbImg = document.getElementById('lightboxImg');
      const lbClose = document.getElementById('lightboxClose');
      document.addEventListener('click', (ev) => {
        const card = ev.target.closest('.card');
        if(card && card.dataset.full){
          lbImg.src = card.dataset.full;
          lb.classList.add('open');
        }
        if(ev.target === lb){ lb.classList.remove('open'); }
      });
      lbClose.addEventListener('click', ()=> lb.classList.remove('open'));
      window.addEventListener('keydown', (e)=>{ if(e.key==='Escape') lb.classList.remove('open'); });
    })();