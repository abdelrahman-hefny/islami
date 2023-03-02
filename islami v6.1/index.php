<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="آثار إسلامي | note">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include("./incudes/head.php");
  echo $link;

  echo $header;
  ?>

  <!-- end header  -->

  <!-- START LANDING  -->
  <div class="landing">
    <div class="contener ">

      <div class="text">
        <h1>آثار إسلامي.</h1>
        <p>كلية الآداب آثار إسلامي.</p>
      </div>
    </div>
  </div>
  <!-- end landing  -->
  <section class="article">
    <div class="contener ">

      <h2 class="main-title">المحاضرات</h2>
    </div>
    <!-- المحاضرت -->

    <div class="contener ">

      <div class="boxes " id="boxes">
   

      
        <!-- box -->
 
     
       </div>
      </div>
    </div>
  </section>

  <?php
  include("./incudes/head.php");
  echo $btn;
  echo $footer;
  echo $script;
  ?>
  <script>
  let add = document.getElementById('boxes');



  function a(m, name, p, doc, url) {
    add.innerHTML += `
   <!-- box -->
   <div class="box m${m} ">
     <a href="${url}">
       <div class="m${m}">
         <h4>${name} </h4>
         <p>${p}</p>
         <h3 class="h${m}">${doc}</h3>
       </div>
     </a>
   </div>

`;
  }
  a("7", 'عمارة المغرب والاندلس', "انواع العمارة", 'سهام عبدالله', 'http://islami.byethost33.com/pages/sham1/m1.php')
  a("3", 'تاريخ المغرب والاندلس', "احوال  بلاد المغرب قبل الفتح", 'حضرة جمال', 'http://islami.byethost33.com/pages/khadra/m1.php')
  a("3", 'تاريخ المغرب والاندلس', "اسباب فتح بلاد المغرب", 'حضرة جمال', 'http://islami.byethost33.com/pages/khadra/m2.php')
  a("6", 'فنون فاطمي وأيوبي', "    22-2-2023", 'عصام عادل', 'http://islami.byethost33.com/pages/asam/m1.php')
  a("7", 'عمارة المغرب والاندلس', "الطرز العمرانية", 'سهام عبدالله', 'http://islami.byethost33.com/pages/sham1/m2.php')
  a("1", 'لغة اوروبيه', "2023", 'صالح فتحي', 'http://islami.byethost33.com/pages/salh/m1.php')

</script>
  </body>

</html>