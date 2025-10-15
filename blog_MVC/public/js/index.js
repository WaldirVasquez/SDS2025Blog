document.addEventListener('DOMContentLoaded', function () {
    const imageBoxes = document.querySelectorAll('.image-box');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const closeModal = document.querySelector('.close-modal');

    imageBoxes.forEach(box => {
        box.addEventListener('click', function () {
            const fullImgSrc = box.getAttribute('data-full');
            if (fullImgSrc) {
                modalImage.src = fullImgSrc;
                modal.style.display = 'block';
            }
        });
    });

    closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
        modalImage.src = '';
    });

    // Optional: close modal when clicking outside the image
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            modalImage.src = '';
        }
    });
});