<?php

/* OCCoreBundle:Contact:contact.html.twig */
class __TwigTemplate_79061b56ad177ebfb1c2d04d413b13184d04948c9993ec6482ce1169a22795a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OCCoreBundle::layoutAcceuil.html.twig");

        $this->blocks = array(
            'acceuil' => array($this, 'block_acceuil'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layoutAcceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_acceuil($context, array $blocks = array())
    {
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "  
<p>Message flash :  ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 59,  127 => 44,  113 => 40,  70 => 40,  76 => 23,  34 => 7,  84 => 25,  77 => 23,  65 => 19,  53 => 15,  134 => 58,  129 => 57,  97 => 9,  90 => 63,  81 => 54,  23 => 4,  58 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 15,  63 => 36,  59 => 17,  38 => 11,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 20,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 58,  78 => 27,  46 => 12,  27 => 5,  44 => 11,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 44,  117 => 13,  105 => 40,  91 => 27,  62 => 36,  49 => 12,  24 => 2,  25 => 3,  19 => 2,  79 => 44,  72 => 47,  69 => 20,  47 => 14,  40 => 15,  37 => 6,  22 => 6,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 46,  120 => 40,  115 => 12,  111 => 37,  108 => 13,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 37,  55 => 16,  52 => 15,  50 => 10,  43 => 10,  41 => 7,  35 => 5,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 45,  125 => 45,  122 => 44,  116 => 41,  112 => 11,  109 => 34,  106 => 12,  103 => 11,  99 => 62,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 41,  64 => 19,  60 => 17,  57 => 15,  54 => 10,  51 => 14,  48 => 14,  45 => 11,  42 => 11,  39 => 10,  36 => 5,  33 => 9,  30 => 6,);
    }
}
