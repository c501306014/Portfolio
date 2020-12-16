
<!-- topへ戻るボタン -->
<div id="scroll-to-top">
    <transition name="fade">
        <a v-if="isActive" href="#" v-scroll-to="'#top-wrapper'" title="topへ戻る">
            <i class="fas fa-arrow-up"></i>
        </a>
    </transition>
</div>

</div>
    <?php wp_footer(); ?>
</body>

</html>