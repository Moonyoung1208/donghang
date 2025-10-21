<?php
if (!defined('_INDEX_'))
    define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/index.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/index.php');
    return;
}

include_once(G5_THEME_PATH . '/head.php');
?>

<!-- 메인 비주얼 -->
<section class="hero">
    <div class="hero-slider">
        <div class="hero-slide active">
            <div class="container">
                <div class="hero-content mw1200">
                    <h2 class="hero-title">함께 걷는 길, <br class="mobile-br"> 더 든든한 동행</h2>
                    <p class="hero-text">전문 교육을 이수한 병원동행매니저가 보호자처럼 정성껏 함께합니다</p>
                    <a href="service.html" class="ctm_btn ctm_btn-large ctm_btn-white">서비스 자세히 보기</a>
                </div>
            </div>
        </div>

        <div class="hero-slide">
            <div class="container">
                <div class="hero-content mw1200">
                    <h2 class="hero-title">전문 병원동행매니저 <br class="mobile-br"> 교육 프로그램</h2>
                    <p class="hero-text">체계적인 이론과 실습으로 전문성을 갖춘 매니저를 양성합니다</p>
                    <a href="program.html" class="ctm_btn ctm_btn-large ctm_btn-white">교육 신청하기</a>
                </div>
            </div>
        </div>

        <div class="hero-slide">
            <div class="container">
                <div class="hero-content mw1200">
                    <h2 class="hero-title">병원·요양기관 <br class="mobile-br"> 인력 파견 서비스</h2>
                    <p class="hero-text">검증된 전문 인력을 기관에 파견해드립니다</p>
                    <a href="service.html#partner" class="ctm_btn ctm_btn-large ctm_btn-white">제휴 문의하기</a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-controls">
        <button class="hero-prev" aria-label="이전 슬라이드">
            <i class="fa-solid fa-angle-left"></i>
        </button>
        <div class="hero-dots"></div>
        <button class="hero-next" aria-label="다음 슬라이드">
            <i class="fa-solid fa-angle-right"></i>
        </button>
    </div>
</section>

<!-- 서비스 한눈에 보기 -->
<section class="services-overview">
    <div class="container">
        <h2 class="section-title">서비스 한눈에 보기</h2>
        <p class="section-subtitle">더 동행이 제공하는 전문 서비스를 확인하세요</p>

        <div class="service-cards mw1200">
            <article class="service-card fade-up">
                <div class="service-icon">
                    <!-- <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <circle cx="30" cy="30" r="28" stroke="#E4007F" stroke-width="2" />
                        <path d="M30 15v30M15 30h30" stroke="#E4007F" stroke-width="2" stroke-linecap="round" />
                    </svg> -->
                    <img src="/img/shortcut1.png" alt="동행서비스아이콘">
                </div>
                <div>
                    <h3 class="service-card-title">병원동행 서비스</h3>
                    <!-- <p class="service-card-text">진료부터 검사, 입퇴원까지<br>안심하고 맡기실 수 있습니다</p> -->
                    <a href="service.html" class="service-card-link">자세히 보기
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="service-card fade-up">
                <div class="service-icon">
                    <!-- <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <rect x="10" y="15" width="40" height="30" rx="2" stroke="#E4007F" stroke-width="2" />
                        <path d="M20 25h20M20 30h15M20 35h20" stroke="#E4007F" stroke-width="2"
                            stroke-linecap="round" />
                    </svg> -->
                    <img src="/img/shortcut2.png" alt="교육프로그램아이콘">
                </div>
                <div>
                    <h3 class="service-card-title">교육 프로그램</h3>
                    <!-- <p class="service-card-text">전문 병원동행매니저 양성<br>체계적인 이론과 실습 교육</p> -->
                    <a href="education.html" class="service-card-link">자세히 보기
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="service-card fade-up">
                <div class="service-icon">
                    <!-- <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <circle cx="30" cy="22" r="8" stroke="#E4007F" stroke-width="2" />
                        <path d="M15 45c0-8.284 6.716-15 15-15s15 6.716 15 15" stroke="#E4007F" stroke-width="2"
                            stroke-linecap="round" />
                    </svg> -->
                    <img src="/img/shortcut3.png" alt="인력파견아이콘">
                </div>
                <div>
                    <h3 class="service-card-title">인력 파견</h3>
                    <!-- <p class="service-card-text">병원·요양기관 전문인력<br>정기·단기·전담형 파견</p> -->
                    <a href="service.html#partner" class="service-card-link">자세히 보기
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- 교육 일정 -->
<section class="program-schedule">
    <div class="container mw1200">
        <div class="schedule-wrapper">
            <div class="schedule-content fade-up">
                <h2 class="section-title">병원동행매니저 교육</h2>
                <p class="schedule-text">전문성과 따뜻함을 갖춘 동행매니저가 되어보세요.<br>체계적인 교육과 실습, 그리고 취업 연계까지 지원합니다.</p>

                <ul class="schedule-list">
                    <li>의료 기초 지식 및 병원 이해</li>
                    <li>응급 상황 대처 및 안전 관리</li>
                    <li>고객 응대 및 서비스 매너</li>
                    <li>병원 현장 실습 및 케이스 리뷰</li>
                </ul>

                <div class="program-btns">
                    <a href="program.html" class="ctm_btn ctm_btn-outline ctm_btn-large">교육 신청 확인하기</a>
                </div>
            </div>

            <div class="schedule-image fade-up">
                <img src="./img/program.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="mou">
    <div class="container mw1200">
        <div class="mou-wrapper">
            <h2 class="section-title">MOU 체결</h2>
            <p class="mou-text">더동행과 함께하는 협약 기관들을 소개합니다</p>
        </div>
        <div class="mou-content">
            <div>
                <img src="./img/mou1.png" alt="mou체결">
                <div class="mou-content-text">
                    <span class="mou-badge">MOU 협약기관</span>
                    <p>박언휘종합내과</p>
                </div>
            </div>
            <div><img src="./img/mou2.png" alt="mou체결">
                <div class="mou-content-text">
                    <span class="mou-badge">MOU 협약기관</span>
                    <p>한패밀리병원</p>
                </div>
            </div>
            <div><img src="./img/mou3.png" alt="mou체결">
                <div class="mou-content-text">
                    <span class="mou-badge">MOU 협약기관</span>
                    <p>(의)일민의료재단 세강병원</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 이용 후기 -->
<section class="reviews-section">
    <div class="container mw1200">
        <h2 class="section-title">고객님들의 후기</h2>
        <p class="section-subtitle">더 동행과 함께한 분들의 소중한 이야기</p>

        <div class="reviews-grid">
            <article class="review-card fade-up">
                <div class="review-rating">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p class="review-text">"혼자 계신 어머니 병원 모시고 가는 게 걱정이었는데, 동행매니저님이 처음부터 끝까지 세심하게 챙겨주셔서 정말 안심이 되었습니다."</p>
                <div class="review-author">
                    <strong>김○○</strong>
                    <span>서비스 이용자</span>
                </div>
            </article>

            <article class="review-card fade-up">
                <div class="review-rating">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p class="review-text">"교육 과정이 정말 체계적이고 실무에 도움이 많이 되었어요. 수료 후 바로 취업 연계까지 받아서 감사합니다."</p>
                <div class="review-author">
                    <strong>이○○</strong>
                    <span>교육 수료생</span>
                </div>
            </article>

            <article class="review-card fade-up">
                <div class="review-rating">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p class="review-text">"요양원에 전문 인력을 파견받았는데, 모두 친절하고 전문성이 뛰어나서 입소자분들도 만족하고 계십니다."</p>
                <div class="review-author">
                    <strong>박○○</strong>
                    <span>제휴 기관 담당자</span>
                </div>
            </article>
        </div>

        <div class="reviews-more">
            <a href="review.html" class="ctm_btn ctm_btn-outline">후기 더보기</a>
        </div>
    </div>
</section>

<!-- 공지사항 -->
<section class="notice-section mw1200">
    <div class="container">
        <div class="notice-header fade-up">
            <h2 class="section-title">공지사항</h2>
            <a href="notice.html" class="notice-more">전체보기</a>
        </div>

        <ul class="notice-list fade-up">
            <li class="notice-item">
                <a href="notice.html">
                    <span class="notice-badge">공지</span>
                    <span class="notice-title">2025년 11월 병원동행매니저 교육 일정 안내</span>
                    <span class="notice-date">2025.10.10</span>
                </a>
            </li>
            <li class="notice-item">
                <a href="notice.html">
                    <span class="notice-badge">공지</span>
                    <span class="notice-title">병원동행매니저 상시 채용 공고</span>
                    <span class="notice-date">2025.10.05</span>
                </a>
            </li>
            <li class="notice-item">
                <a href="notice.html">
                    <span class="notice-badge">공지</span>
                    <span class="notice-title">추석 연휴 서비스 운영 안내</span>
                    <span class="notice-date">2025.09.28</span>
                </a>
            </li>
            <li class="notice-item">
                <a href="notice.html">
                    <span class="notice-title">더 동행 제휴 병원 확대 소식</span>
                    <span class="notice-date">2025.09.20</span>
                </a>
            </li>
            <li class="notice-item">
                <a href="notice.html">
                    <span class="notice-title">더 동행 매니저 교육 커리큘럼</span>
                    <span class="notice-date">2025.09.30</span>
                </a>
            </li>
        </ul>
    </div>
</section>

<!-- 빠른 문의 -->
<section class="quick-contact">
    <div class="container">
        <div class="contact-box">
            <h2 class="section-title">더 동행과 함께하세요</h2>
            <p class="section-subtitle">언제든지 편하게 문의해주세요</p>

            <div class="contact-buttons">
                <a href="tel:000-0000-0000" class="contact-btn fade-up">
                    <span class="contact-icon">
                        <img src="/img/contact1.png" alt="전화문의아이콘">
                    </span>
                    <span class="contact-text">전화 문의</span>
                </a>
                <a href="contact.html" class="contact-btn fade-up">
                    <span class="contact-icon">
                        <img src="/img/contact2.png" alt="온라인문의아이콘">
                    </span>
                    <span class="contact-text">온라인 문의</span>
                </a>
                <a href="#" class="contact-btn kakao fade-up">
                    <span class="contact-icon">
                        <img src="/img/contact3.png" alt="카카오톡문의아이콘">
                    </span>
                    <span class="contact-text">카카오톡 문의</span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slides = document.querySelectorAll(".hero-slide");
        const prevBtn = document.querySelector(".hero-prev");
        const nextBtn = document.querySelector(".hero-next");
        const dotsContainer = document.querySelector(".hero-dots");

        let current = 0;
        let timer;

        // 점(dot) 생성
        slides.forEach((_, i) => {
            const dot = document.createElement("div");
            dot.classList.add("hero-dot");
            if (i === 0) dot.classList.add("active");
            dot.addEventListener("click", () => showSlide(i));
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll(".hero-dot");

        function showSlide(index) {
            slides[current].classList.remove("active");
            dots[current].classList.remove("active");
            current = (index + slides.length) % slides.length;
            slides[current].classList.add("active");
            dots[current].classList.add("active");
            resetTimer();
        }

        function nextSlide() {
            showSlide(current + 1);
        }

        function prevSlide() {
            showSlide(current - 1);
        }

        function autoSlide() {
            timer = setInterval(() => showSlide(current + 1), 6000);
        }

        function resetTimer() {
            clearInterval(timer);
            autoSlide();
        }

        prevBtn.addEventListener("click", prevSlide);
        nextBtn.addEventListener("click", nextSlide);

        autoSlide();
    });


    // SCROLL ANIMATION (with stagger delay)
    document.addEventListener("DOMContentLoaded", () => {
        const fadeElements = document.querySelectorAll(".fade-up");

        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // 각 요소별 등장 지연 시간 (순서에 따라 딜레이)
                        const index = [...fadeElements].indexOf(entry.target);
                        entry.target.style.transitionDelay = `${index * 0.08}s`;

                        entry.target.classList.add("show");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1 }
        );

        fadeElements.forEach((el) => observer.observe(el));
    });

</script>

<?php
include_once(G5_THEME_PATH . '/tail.php');