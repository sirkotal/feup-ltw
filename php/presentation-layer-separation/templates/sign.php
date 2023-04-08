<?php function output_register() { ?>
    <section id="register">
      <h1>Register</h1>
      <form>
        <label>
          Username <input type="text" name="username">
        </label>
        <label>
          E-mail <input type="email" name="email">
        </label>
        <label>
          Password <input type="password" name="password">
        </label>
        <button formaction="#" formmethod="post">Register</button>
      </form>
    </section>
<?php } ?>

<?php function output_login() { ?>
    <section id="login">
      <h1>Login</h1>
      <form>
        <label>
          Username <input type="text" name="username">
        </label>
        <label>
          Password <input type="password" name="password">
        </label>
        <button formaction="#" formmethod="post">Login</button>
      </form>
    </section>
<?php } ?>