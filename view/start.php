<?php
    ob_start();
?>
<div class="container">
        <div class="row block">
            <div class="col-md-6 h1">
                <h1>Мастер-класс — это пространство, где ты пробуешь, понимаешь и делаешь сам.</h1>
            </div>
            <div class="col-md-6 h2">
                <div class="vertical-slider">
                    <div class="slider-track">
                        <?php ViewMasterClasses::MasterClasses($arr); ?>
                    </div>
                </div>
            </div>
            <!-- лента идет, но на класс можно нажать и перейти -->
        </div>
        <div  class="row">
            <div class="col-md-6">
                <h2>Что входит в каждый масстер класс?</h2>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Живой практический опыт</li>
                    <li>Пошаговое объяснение и показ</li>
                    <li>Личное сопровождение и ответы на вопросы</li>
                    <li>Безопасное пространство для проб и ошибок</li>
                    <li>Понимание, как и зачем ты это делаешь</li>
                    <li>Результат, который можно применить сразу</li>
                </ul>
            </div>
        </div>
        <div>
            <h2>Популярные сейчас</h2>
            <div class="row align-items-center">
    
                <div class="col-md-2 col-6 text-center mb-4">
                    <img src="img/1.jpg" class="img-fluid" alt="Картинка 1">
                    <p>Описание 1</p>
                    </div>

                    <div class="col-md-2 col-6 text-center mb-4">
                    <img src="img/1.jpg" class="img-fluid" alt="Картинка 2">
                    <p>Описание 2</p>
                    </div>

                    <div class="col-md-2 col-6 text-center mb-4">
                    <img src="img/1.jpg" class="img-fluid" alt="Картинка 3">
                    <p>Описание 3</p>
                    </div>

                    <div class="col-md-2 col-6 text-center mb-4">
                    <img src="img/1.jpg" class="img-fluid" alt="Картинка 4">
                    <p>Описание 4</p>
                    </div>

                    <div class="col-md-2 col-6 text-center mb-4">
                    <img src="img/1.jpg" class="img-fluid" alt="Картинка 5">
                    <p>Описание 5</p>
                    </div>

                    <div class="col-md-2 col-6 text-center mb-4">
                    <img src="img/1.jpg" class="img-fluid" alt="Картинка 6">
                    <p>Описание 6</p>
                    </div>

            </div>
        </div>
        <div>
            <h2>Посмотрите, что говорят наши участники</h2>
            <!-- отзывы -->
        </div>
    </div>
<?php
    $content = ob_get_clean();

    include_once 'view/layout.php';
?>