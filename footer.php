<!-- topへ戻るボタン -->
<div id="scroll-to-top">
    <transition name="fade">
        <a v-if="isActive" href="#" v-scroll-to="'#top-wrapper'" title="topへ戻る">
            <i class="fas fa-arrow-up"></i>
        </a>
    </transition>
</div>

<!-- <script>
    let vh = window.innerHeight;
    document.getElementById('top-wrapper').style.height = vh / 10 + 'rem';
    window.addEventListener('resize', () => {
        let vh = window.innerHeight;
        document.getElementById('top-wrapper').style.height = vh / 10 + 'rem';
    })
</script> -->

<?php wp_footer(); ?>
</body>

</html>