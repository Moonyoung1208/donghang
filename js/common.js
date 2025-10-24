// 모바일 메뉴 토글
const menuToggle = document.querySelector('.menu-toggle');
const gnb = document.querySelector('.gnb');
const gnbItems = document.querySelectorAll('.gnb-list > li');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    gnb.classList.toggle('active');
});

gnbItems.forEach(item => {
    item.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            const snb = item.querySelector('.snb');
            const clickedLink = e.target.closest('a');
            const mainLink = item.querySelector('a');

            if (snb && clickedLink === mainLink) {
                e.preventDefault();
                gnbItems.forEach(other => {
                    if (other !== item) {
                        other.classList.remove('active');
                    }
                });
                item.classList.toggle('active');
            }
        }
    });
});

window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        gnb.classList.remove('active');
        menuToggle.classList.remove('active');
        gnbItems.forEach(item => item.classList.remove('active'));
    }
});

// 상단으로 버튼
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTop.classList.add('show');
    } else {
        backToTop.classList.remove('show');
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});