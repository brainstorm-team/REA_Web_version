<?php

/* MyAppUserBundle::layout.html.twig */
class __TwigTemplate_1d110507c3989b35ea44e80827c5c0b865c8317c7c67706d3df933aada0ad7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'Container' => array($this, 'block_Container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "</head>
<body>
<div class=\"main\">
  <!--==============================header=================================-->
  <header>
      ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "  </header>
  <!--==============================content================================-->
  
  <section id=\"content\">
    <div class=\"container_12\">
            ";
        // line 79
        $this->displayBlock('Container', $context, $blocks);
        // line 119
        echo "
        </div>
      </div>
      <div class=\"clear\"></div>
      <div>
            ";
        // line 124
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 126
        echo "      </div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <p>� 2012 Real Estate</p>
  <p>Website Template by <a target=\"_blank\" href=\"http://www.esprit.ens.tn/\">BrainStorm</a></p>
</footer>
<script>Cufon.now();</script>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "<title>RealEstate | Buying</title>
<meta charset=\"utf-8\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/grid_12.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider-2.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jqtransform.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>RealEstate | Buying</title>
<meta charset=\"utf-8\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/grid_12.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider-2.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jqtransform.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cufon-yui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vegur_400.font.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Vegur_bold_700.font.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cufon-replace.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tms-0.4.x.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jqtransform.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/FF-cash.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>


<!--[if lt IE 9]>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ie.css"), "html", null, true);
        echo "\">
<![endif]-->
";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "    <div>
      <h1><a href=\"index.html\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></h1>
      <div class=\"social-icons\"> <span>Follow Us:</span> <a href=\"#\" class=\"icon-3\"></a> <a href=\"#\" class=\"icon-2\"></a> <a href=\"#\" class=\"icon-1\"></a> </div>
      <div id=\"slide\">
        <div class=\"slider\">
          <ul class=\"items\">
            <li><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-1-small.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
            <li><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-2-small.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
            <li><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-3-small.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
          </ul>
        </div>
        <a href=\"#\" class=\"prev\"></a><a href=\"#\" class=\"next\"></a> </div>
      <nav>
                ";
        // line 59
        $this->displayBlock('nav', $context, $blocks);
        // line 70
        echo "
      </nav>
    </div>
          ";
    }

    // line 59
    public function block_nav($context, array $blocks = array())
    {
        // line 60
        echo "
        <ul class=\"menu\">
          <li><a href=\"index.html\">Accueil</a></li>
          <li class=\"current\"><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("buying.html"), "html", null, true);
        echo "\">Espace Client</a></li>
          <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("selling.html"), "html", null, true);
        echo "\">Offre</a></li>
          <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("renting.html"), "html", null, true);
        echo "\">Renting</a></li>
          <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("finance.html"), "html", null, true);
        echo "\">Finance</a></li>
          <!--<li><a href=\"";
        // line 67
        echo "\">Contacts</a></li>-->
        </ul>
                  ";
    }

    // line 79
    public function block_Container($context, array $blocks = array())
    {
        // line 80
        echo "
      <div class=\"grid_8\">
        ";
        // line 83
        echo "        
         
        
      
        
      </div>
      <div class=\"grid_4\">
        <div class=\"left-1\">
          <h2 class=\"top-1 p3\">Find your home</h2>
          <form id=\"form-1\" class=\"form-1 bot-2\" action=\"#\">
            <div class=\"select-1\">
              <label>Home type</label>
              <select name=\"select\" >
                <option>Homes for sale</option>
              </select>
            </div>
            <div>
              <label>Location</label>
              <input type=\"text\" value=\"Address, City, Zip\" onBlur=\"if(this.value=='') this.value='Address, City, Zip'\" onFocus=\"if(this.value =='Address, City, Zip' ) this.value=''\">
            </div>
            <div class=\"select-2\">
              <label>Beds</label>
              <select name=\"select\" >
                <option>&nbsp;</option>
              </select>
            </div>
            <div class=\"select-2 last\">
              <label>Baths</label>
              <select name=\"select\" >
                <option>&nbsp;</option>
              </select>
            </div>
            <a class=\"button\">Search</a>
            <div class=\"clear\"></div>
          </form>
                    ";
    }

    // line 124
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 125
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 125,  302 => 124,  263 => 83,  259 => 80,  256 => 79,  250 => 67,  246 => 66,  242 => 65,  238 => 64,  234 => 63,  229 => 60,  226 => 59,  219 => 70,  217 => 59,  209 => 54,  205 => 53,  201 => 52,  193 => 47,  190 => 46,  187 => 45,  180 => 37,  176 => 36,  169 => 32,  165 => 31,  161 => 30,  157 => 29,  153 => 28,  149 => 27,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  105 => 13,  101 => 12,  97 => 11,  93 => 10,  89 => 9,  85 => 8,  81 => 7,  77 => 5,  74 => 4,  58 => 126,  56 => 124,  49 => 119,  47 => 79,  40 => 74,  38 => 45,  31 => 40,  29 => 4,  24 => 1,);
    }
}
