  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <title>Lost and Found page</title>
  <link href="<?php echo URL::to('/');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo URL::to('/');?>/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <header>
      <div id="head">
        <div class="head_logo">
          <a href="/home_page"><img class="logo" src="<?php echo URL::to('/');?>/img/logo.jpg" alt=""></a>
        </div>
      </div>
    </header>

    <div id ="content">
      <div class="content_middle">
        <div class="menu">
          <div class="menu_bar">
                <div class="item">
                  <img class="plus" src="<?php echo URL::to('/');?>/img/plus.png" alt="add_list">
                  <a href="/choose">Добавить</a>
                </div>

                <div class="item">
                  <img class="found__item" src="<?php echo URL::to('/');?>/img/home.png" alt="found_list">
                  <a href="/">Домой</a>
                </div>
              </div>
        </div>

        <div class="item_content">
               <?php
                foreach ($posts as $value) {
                  if($value['image'] == ''){
                   echo '<div class="item_menu" >
                      <div class="item_info">
                        <div class="item_user_info">
                          <h2 value="login_user">'.$value['email'].'</h2>';
                            if($value['state'] == 1){
                            echo '<span class="status_lost">Lost</span>';
                            }else{
                            echo '<span class="status_found">Found</span>';
                          }
                            echo '
                        </div>
                        <div class="item_description">
                          <span>'.$value['title'].'
                          </span>
                        </div>
                        <div class="comment">
                          '.Form::open(['url' => '/addcomment', 'method' => 'post']).'
                              
                              <input type="text" value="'.$value['id'].'" name="postid" style="visibility: hidden"/>
                              <input class="comment_info" type="textarea" placeholder="Add comment..." maxlength="200" postid="'.$value['id'].'" name="comment_info" required=""/>
                              
                              <button type="submit">Submit</button>
                          '.Form::close().'
                        </div>
                    </div>
                  </div>';
                }else{
                echo '<div class="item_menu" >
                      <div class="item_info">
                        <div class="item_user_info">
                          <h2 value="login_user">'.$value['email'] .' </h2>';
                            if($value['state'] == '1'){
                            echo '<span class="status_lost">Lost</span>';
                            }else{
                            echo '<span class="status_found">Found</span>';
                          }
                            echo '
                          
                        </div>
                        <div class="item_pict">
                          <img src="'.URL::to('/').'/'.$value['image'].'" alt="">
                        </div>
                        <div class="item_description" style=" margin-bottom: 10px;">
                          <span>'.$value['title'].'
                          </span>
                         </div>
                        <div>';
                          foreach ($comments as $vv) {
                            if($vv['post_id'] == $value['id']){
                              echo '<span style="padding-left: 20px;font-size: 17px;display:block">'.$vv['comment'].'</span><hr><br>';
                            }
                            
                          } echo '</div>
                        
                          '.Form::open(['url' => '/addcomment', 'method' => 'post']).'
                          <div class="comment">
                              <input type="text" value="'.$value['id'].'" name="postid" style="visibility: hidden"/>
                              <input class="comment_info" type="textarea" placeholder="Add comment..." maxlength="200" postid="'.$value['id'].'" name="comment_info">
                              <button type="submit" id ="sub_btn">Submit</button>
                          </div>
                          '.Form::close().'
                        
                        
                        
                    </div>
                  </div>';
              }
                  
                }

              ?>
        </div>
      </div>
    </div>
</body>
</html>
