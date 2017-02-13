<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มการขอรับบริจาค</title>
     
         
         
          <style>
            label {
                display: block
            }
            
        </style>
        <!--<script src="../ckeditor/ckeditor.js" ></script>-->
    </head>
    <body>
    
        <h1>เพิ่มข้อมูลสัตว์</h1>
        <form id="form1"action="insert_news.php" method="post" enctype="multipart/form-data">
            <label for="newstype">เลือกประเภทการขอรับบริจาค</label>
            <select name="newstype">
                <option value="">--เลือก--</option>
               
            </select>
                <br><br>
                
                <label for="news_topic">หัวข้อ</label>
                <input type="text" name="news_topic" required>
                
                  <label for="news_detail">รายเอียด</label>
                  <textarea name="news_detail" id="news_detail" rows="10" cols="80"></textarea>
                      <script>
                         CKEDITOR.replace( 'news_detail', {
                                language: 'th',
                                uiColor: '#8DAAB1',
                                width: 600
                                }); 
                  </script>
                  
                  
                  <label for="news_filename">ภาพสตว์</label>
                  <input type="file" name="news_filename">
                  <label for="news_status">ความเร่งด่วน</label>
                  
                  <input type="radio" value="0" checked name="news_status">ขอรับทั่วไป<br>
                  <input type="radio" value="1" name="news_status"> ขอรับแบบเร่งด่วน<br>
                  <input type="submit" value="บันทึก">
                 
                  
          
            </select>
        </form>
    </body>
</html>
