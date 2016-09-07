<?php
include "header.php";
?>
<?php
include "booking-form.php";
?>
<?php
include "nav.php";
?>
<div class="rewiews_wrapper">
<h3 class="comments_h3">Отзывы о прибывании в нашем хостеле</h3>
    <div id="disqus_thread"></div>
    <script>
        /**
         * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */
        /*
         var disqus_config = function () {
         this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
         };
         */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');

            s.src = '//bunker-light.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</div>
<?php
include "footer.php";
?>