<?php
include_once 'header.php'
?>
<h1>Welcome to RecipeTube</h1>
<main>
  <section>
    <h2>Noodles & Eggs</h2>
    <img src="./noodles.jpg" alt=" noodles with eggs" width="850" height="400">
    <br />
    <hr />
    <div>
      <h3>Ingredients</h3>
      <ul>
        <li> 2 packets of instant noodles (any flavor)</li>
        <li> 1 onion, chopped</li>
        <li> 2 tomatoes, chopped</li>
        <li> 1 tablespoon curry powder</li>
        <li> 1/2 teaspoon turmeric powder</li>
        <li> 1/2 teaspoon salt</li>
        <li> 1/4 teaspoon black pepper</li>
        <li> 2 tablespoons oil</li>
        <li> 3 eggs</li>
        <li> Coriander leaves, for garnish</li>
      </ul>
    </div>
  </section>
  <hr />
  <br>
  <article id="instruction" class="instruction">
    <h2>Instructions</h2>
    <div>
      <ol>
        <li>Cook the noodles according to the package directions.</li>
        <li>
          While the noodles are cooking, heat the oil in a large skillet
          over medium heat.
        </li>
        <li>Add the onion and cook until softened, about 5 minutes.</li>
        <li>
          Add the tomatoes, curry powder, turmeric powder, salt, and pepper
          to the skillet.
        </li>
        <li>
          Cook until the tomatoes are soft and the spices are fragrant,
          about 5 minutes.
        </li>
        <li>
          Push the tomato mixture to the side of the skillet and add the
          eggs.
        </li>
        <li>Cook the eggs until they are done to your liking.</li>
        <li>Add the cooked noodles to the skillet and mix to combine.</li>

        <li>Garnish with coriander leaves and serve.</li>
      </ol>
    </div>
    <div>
      <h4>Tips</h4>
      <ul>
        <li>
          For a spicier dish, add more curry powder or red chili powder to
          taste.
        </li>
        <li>
          You can also add other vegetables to the dish, such as bell
          peppers, carrots, or green beans.
        </li>
        <li>
          If you don't have instant noodles, you can use regular noodles.
          Just cook them according to the package directions before adding
          them to the skillet
        </li>
      </ul>
      <p>This recipe is quick and easy to make, and it's a great way to use up leftover vegetables. It's also a delicious and affordable meal that is perfect for busy weeknights.</p>
    </div>
  </article>
  <hr>
  <br>
  <fieldset id="form">
    <legend>We value your opinion</legend>
    <form action="">
      <label for="name"></label>
      <input type="text" id="name" placeholder="Your Name" />
      <label for="content"></label>
      <textarea cols="30" rows="10">Your Message </textarea>
      <br />
      <button>Submit</button>
    </form>
  </fieldset>
</main>
<?php
include_once 'footer.php'
?>
