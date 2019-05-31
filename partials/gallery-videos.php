<?php
/**
 * Galeria de notícias
 *
 * @package ESM
 */
?>

<div class="gallery-videos">

    <div id="ajaxContainer">

      <?php for ($i = 1; $i <= 3; $i++): ?>

        <a href="" class="video">
          <div class="cover">
            <div id="player_<?php echo $i; ?>" class="thumbnail"></div>
            <script>
              // 2. This code loads the IFrame Player API code asynchronously.
              var tag = document.createElement('script');

              tag.src = "https://www.youtube.com/iframe_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

              // 3. This function creates an <iframe> (and YouTube player)
              //    after the API code downloads.
              var player_<?php echo $i; ?>;
              var containerWidth_<?php echo $i; ?> = $("#player_<?php echo $i; ?>").parent().innerWidth();
              var videoHeight_<?php echo $i; ?> = (360/640) * containerWidth_<?php echo $i; ?>;

              // 4. The API will call this function when the video player is ready.
              function onPlayerReady(event) {
                //event.target.playVideo();
              }

              // 5. The API calls this function when the player's state changes.
              //    The function indicates that when playing a video (state=1),
              //    the player should play for six seconds and then stop.
              var done = false;
              function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING && !done) {
                  setTimeout(stopVideo, 6000);
                  done = true;
                }
              }
              function stopVideo() {
                player.stopVideo();
              }
            </script>
          </div>
          <h3 class="title">Exemplo 1: a responsabilidade das instituições de ensino</h3>
        </a>

      <?php endfor; ?>

      <script>
        function onYouTubeIframeAPIReady() {
          <?php for ($i = 1; $i <= 3; $i++): ?>
            player_<?php echo $i; ?> = new YT.Player('player_<?php echo $i; ?>', {
              height: videoHeight_<?php echo $i; ?>,
              width: containerWidth_<?php echo $i; ?>,
              videoId: 'wrRPEPJlH44',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
          <?php endfor; ?>
        }
      </script>

    </div>

    <div class="more-videos">
      <a class="esm-button">Carregar mais</a>
    </div>

</div>
