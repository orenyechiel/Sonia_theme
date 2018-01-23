<?php get_header(); ?>
            
            <div class="col-sm-12 mb-5">
                <h1 class="display-4 text-center text-white my-5">קהילת שורשים מקווקז</h1>
            </div>
        </div>
    </div>
            
    <div class="container my-4">
       
       <div class="row my-3">
          
       <div class="col-md-8 text-right" id="form" style="display: none;">
        <form>
          <div class="form-group">
            <label for="name">שמך</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="mail">המייל שלך (לצורך מתן תשובה)</label>
            <input type="email" class="form-control" id="mail">
          </div>

          <div class="form-group">
            <label for="textarea">הערות</label>
            <textarea class="form-control" id="textarea" rows="3"></textarea>
          </div>

            <input type="sumit" class="btn btn-outline-info" value="שלח" id="send">
            <input type="button" class="btn btn-outline-dark" value="ביטול" id="cancel">
        </form>
        </div>
           
            <div class="col-md-8 text-right" id="welcome">
                <p>
                ברוכים הבאים לאתר החדש של קהילת שורשים מקווקז, <br>
בסימן טובו הקמנו אתר אינטרנט כהשלמה לקבוצה שבפייסבוק שמטרתו העיקרית היא לרכז תחת קורת גג אחת את כל המידע שניתן למצוא בקבוצה בצורה מסודרת וכל מידע רלוונטי שקשור לעדה היהודית הקווקזית בארץ ובכלל. מאמרים שיעסקו על ההיסטוריה ותולדות העדה, 
התוכן העשיר שבתרבות ובמטבח, וגלריות מסע לחבל הקווקז ועוד מלא תכנים שיוספו כאן בהמשך. <br>
כל מי שיש לו תוכן ענייני הקשור בהיסטוריה או בקהילה שירצה לשתף הרי זה מבורך, השאיפה היא לבנות כאן את המוזיאון האינטרנטי של הקהילה, לטפח ולשמר את המסורת העשירה והיקרה לליבנו. <br>
                    בנוסף, הכפתור למטה נועד לצורך הרשמה קלה יותר למסעות הבאים לקווקז, הוא יהיה פעיל רק בתקופת ההרשמה.<br>
שימו לב שהאתר נמצא בהרצה וריק ברובו, יהיו שינויים ושיפורים בקרוב וכמובן שיעלו תכנים.. בעיקר שלכם (: <br>
                נשמח לקבל פידבקים ורעיונות חדשים שנוכל לשפר ולהוסיף, אל תהססו, זה המקום של כולנו. תהנו!
                </p>
                    <a id="suggests" class="btn btn-info btn-lg">להרשמה &raquo;</a>
            </div>
            
            <aside class="col-md text-right">
                <?php get_sidebar(); ?>
            </aside>
       </div>
       
        <div class="row text-right">
            <div class="col-md mb-1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/travel.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">המסע אל השורשים</h5>
                        <p class="card-text text-justify">צפו באלבום החדש של המסע האחרון שלנו באוגוסט, מהנחיתה בבאקו דרך הרי הקווקז המדהימים ועד לדרבנט.</p>
                        <a href="http://kavkaz.org.il/category/גלריה/" class="btn btn-outline-primary">לגלריה..</a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/food.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">המטבח הקווקזי</h5>
                        <p class="card-text text-justify">הטעמים, הריחות, המסורת  והיופי של המטבח הקווקזי, המתכונים והזכרונות של כולנו מבית אמא.. כאן תוכלו למצוא וגם לשתף את הטוויסטים שלכם למטבח הקווקזי.</p>
                        <a href="http://kavkaz.org.il/category/מאמרים/" class="btn btn-outline-danger">למאמרים..</a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-1 order-1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/dancing.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">המוזיקה</h5>
                        <p class="card-text text-center">השירים היפים והריקודים המסורתיים.</p>
                        <a href="http://kavkaz.org.il/category/תרבות/" class="btn btn-outline-warning">לתרבות..</a>
                    </div>
                </div>
            </div>

        </div>
</div>

               <div class="memorial text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/memorial-candle.jpeg">
                   <p>לזכר סוניה בת-ציון פסחוב</p>
                </div>
                
<?php get_footer(); ?>
