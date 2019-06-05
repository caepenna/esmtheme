<?php
/**
 * Galeria de vídeos
 *
 * @package ESM
 */
?>

<div class="gallery-videos">
    <div id="ajaxContainer">

      <?php

        $myApiKey = get_field('api_key', 'option');
        $myChannelID = get_field('channel_id', 'option');
        $maxResults="6";

        $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=$maxResults";
        $videoList = file_get_contents($myQuery);

        $decoded = json_decode($videoList, true);
        foreach ($decoded['items'] as $items) {
          $id = $items['id']['videoId'];
          $title= $items['snippet']['title'];
          $description = $items['snippet']['description'];
          $thumbnail = $items['snippet']['thumbnails']['high']['url'];
      ?>
        <a href="https://www.youtube.com/watch?v=<?php echo $id; ?>" class="video" target="_blank">
            <div class="cover">
              <div class="thumbnail">
                <img src='<?php echo $thumbnail; ?>'>
              </div>
            </div>
            <h3 class="title"><?php echo $title; ?></h3>
        </a>
      <?php  }; ?>
    </div>

    <div class="more-videos">
      <a class="esm-button" href="https://www.youtube.com/channel/<?php echo $myChannelID; ?>" target="_blank">Acessar canal</a>
    </div>

</div>
