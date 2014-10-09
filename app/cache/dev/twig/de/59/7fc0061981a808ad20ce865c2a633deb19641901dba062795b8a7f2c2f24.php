<?php

/* OCCoreBundle::layoutAcceuil.html.twig */
class __TwigTemplate_de597fc0061981a808ad20ce865c2a633deb19641901dba062795b8a7f2c2f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'acceuil' => array($this, 'block_acceuil'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>
      
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_core_contact");
        echo "\">Contact</a></li>
     </div>
 
      <div id=\"content\" class=\"col-md-9\">
      ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "      </div>
      </div>
    

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "      <h1>Page d'acceuil de notre site</h1>

       <hr> 
       ";
        // line 44
        $this->displayBlock('acceuil', $context, $blocks);
        // line 46
        echo "       ";
    }

    // line 44
    public function block_acceuil($context, array $blocks = array())
    {
        // line 45
        echo "       ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layoutAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 60,  137 => 59,  134 => 58,  130 => 45,  127 => 44,  123 => 46,  121 => 44,  116 => 41,  113 => 40,  108 => 13,  106 => 12,  103 => 11,  97 => 9,  90 => 63,  88 => 58,  81 => 54,  72 => 47,  70 => 40,  63 => 36,  40 => 15,  38 => 11,  33 => 9,  24 => 2,  83 => 25,  76 => 23,  68 => 20,  64 => 19,  59 => 17,  55 => 16,  52 => 15,  47 => 14,  42 => 11,  39 => 10,  32 => 6,  29 => 5,);
    }
}
