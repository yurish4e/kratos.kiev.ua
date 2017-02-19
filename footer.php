<?php /** * The template for displaying the footer. * * Contains the closing of the #content div and all content after * * @package KRATOStwo */ ?>

</div>
<!-- k-container -->
</div>
<!-- kratos-page-wrapper -->

<footer id="k-footer">
    <div class="content-footer-top">
        <ul>
            <li><a href="kratos.kiev.ua/%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B8/" target="_blank">Новости |</a>
            </li>
            <li> <a href="http://vk.com/sk_kratos" target="_blank">Мы в Контакте</a>
            </li>
        </ul>
    </div>

    <div class="content-footer">
        <p>СК "Кратос" 2015 &copy;</p>
        <a href="http://vk.com/yurish4e" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/yurish4e.png" alt=""></a>
    </div>
</footer>


<?php wp_footer(); ?>

<!-- Google analytics plugin-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-56957560-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>