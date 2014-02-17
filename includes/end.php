<!-- ######################## Scripts ######################## -->

<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js" type="text/javascript"></script>
<!-- Initialize JS Plugins -->
<script src="javascripts/app.js" type="text/javascript"></script>


<!-- Hier moet ik nog een if statement voor maken  -->

    <!-- Masonry for galleries -->
        <script src="javascripts/masonry.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            //<![CDATA[
            $(function(){
                var $container = $('#container');
                $container.imagesLoaded( function(){
                    $container.masonry({
                        itemSelector : '.box',
                        isFitWidth: true,
                        isAnimated: true
                    });
                });
            });
        //]]>
        </script>
    <!-- END Masonry -->

</body>
</html>