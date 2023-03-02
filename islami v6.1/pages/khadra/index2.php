<?php include("../../incudes/head.php");
echo $link;

echo $header;
?>
<!-- end header  -->



<section class="article">
  <div class="contener ">

    <h2 class="main-title">تاريخ المغرب والاندلس
    </h2>
  </div>
  <!-- المحاضرت -->

  <div class="contener ">

    <div class=" boxes2" id='khadra'>

      <!-- box  -->
      <div class="box m3 ">
        <a href="http://islami.byethost33.com/pages/khadra/m1.php">
          <div class="m3">
            <h4>تاريخ المغرب والاندلس </h4>
            <p>
              حاله بلاد المغرب قبل الفتح
            </p>
            <h3 class="h3">حضرة جمال</h3>
          </div>
        </a>
      </div>
      <!-- box  -->
      <div class="box m3 ">
        <a href="http://islami.byethost33.com/pages/khadra/m2.php">
          <div class="m3">
            <h4>تاريخ المغرب والاندلس </h4>
            <p>
              اسباب فتح بلاد المغرب
            </p>
            <h3 class="h3">حضرة جمال</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include("../../incudes/head.php");
echo $btn;
echo $footer;
echo $script;
?>


<script>
  let add = document.getElementById('khadra');



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
</script>
</body>

</html>