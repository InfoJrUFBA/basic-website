<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha página</title>
    <style media="screen">
      * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box
      }

      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }

      section {
        padding: 30px 5%;
      }

      header, footer {
        height: 60px;
        width: 100%;
        padding: 10px 5%;
      }

      header img {
        height: 100%;
      }

      .menu {
        height: 100%;
        float: right;
      }

      .menu ul {
        float: right;
        list-style: none;
        display: flex;
      }

      .menu li {
        margin: 0 5px;
      }

      .content-align > * {
        display: inline-block;
      }

      .col {
        width: 23%;
        margin: 5px;
        padding: 10px;
        background-color: #333;
        color: #FFF;
      }

      .dark {
        background-color: #333;
        color: #FFF;
      }

      .flex-box {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }

      .flex-col {
        margin: 5px;
        padding: 15px;
      }

      .flex-col:nth-child(odd) {
        background-color: #f03;
      }

      @media (max-width: 992px) {
        .col {
          width: 31%;
        }
      }

      @media (max-width: 768px) {
        .flex-box {
          display: block;
        }
        .col {
          width: 47%;
        }
      }

      @media (max-width: 600px) {
        .col {
          width: 98%;
        }
      }

    </style>
  </head>
  <body>
    <header class="gt-top-menu xs-left">
      <img src="assets/img/infojrufba.svg" alt="" />
      <nav class="menu">
        <ul>
          <li>Site1</li>
          <li>Site2</li>
          <li>Site3</li>
        </ul>
      </nav>
    </header>
    <section class="dark">
      <h1>Lorem Ipsum</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </section>
    <?php echo $mainTemplate; ?>
    <footer>
      <p>
        InfoJr UFBA 2017
      </p>
    </footer>
  </body>
</html>
