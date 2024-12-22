<?php get_header(); ?>
   <main>
    <!-- Галерея -->
    <section class="gallery">
      <div class="item">
        <img src="http://site/wp-content/uploads/2024/12/nov1.jpg" alt="Новинка 1">
      </div>
      <div class="item">
        <img src="http://site/wp-content/uploads/2024/12/nov2.jpg" alt="Новинка 2">
      </div>
      <div class="item">
        <img src="http://site/wp-content/uploads/2024/12/nov3.jpg" alt="Новинка 3">
      </div>
    </section>

    <!-- Художники -->
    <section class="artists">
      <div class="artist">
        <img src="http://site/wp-content/uploads/2024/12/Leonardo.jpg" alt="Художник 1">
        <div class="info">
          <h3>Леонардо да Винчи</h3>
          <p>Леона́рдо ди сер Пье́ро да Ви́нчи (итал. Leonardo di ser Piero da Vinci[1]; 15 апреля 1452, селение Анкиано, около городка Винчи, близ Флоренции — 2 мая 1519, замок Кло-Люсе, близ Амбуаза, Турень, Франция) — итальянский художник (живописец, скульптор, архитектор) и учёный (анатом, естествоиспытатель), изобретатель, писатель, музыкант, один из крупнейших представителей искусства Высокого Возрождения, яркий пример «универсального человека» (лат. homo universalis).</p>
        </div>
      </div>
      <div class="artist">
        <img src="http://site/wp-content/uploads/2024/12/Vangog.jpg" alt="Художник 2">
        <div class="info">
          <h3>Винсент ван Гог</h3>
          <p>Винсе́нт Ви́ллем ван Гог (нидерл. и фр. Vincent Willem van Gogh[2], нидерландский: [ˈvɪnsənt ˈʋɪləm vɑŋ ˈɣɔx] (слушать)о файле; 30 марта 1853[3][4][…], Зюндерт[вд], Северный Брабант[5][6] — 29 июля 1890[3][4][…], Овер-сюр-Уаз[7][5]) — нидерландский живописец и график, одна из трёх главных фигур постимпрессионизма (наряду с Полем Сезанном и Полем Гогеном), чьё творчество оказало значительное влияние на живопись XX века.</p>
        </div>
      </div>
    </section>
  </main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="qazx"><?php the_title(); ?></p>
     <?php endwhile; else: ?>
        <p class="qazx"> Записей нет.</p>
      <?php endif; ?>

<?php get_footer(); ?>