<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11f3f9a802173501a03d46523881549ddd3a5db9ca719da21ce831594fb7f579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afe476fe7e8142a9fd6fb9322e6b2c18c41b97c940710ededa79464b8f6dab3 = $this->env->getExtension("native_profiler");
        $__internal_6afe476fe7e8142a9fd6fb9322e6b2c18c41b97c940710ededa79464b8f6dab3->enter($__internal_6afe476fe7e8142a9fd6fb9322e6b2c18c41b97c940710ededa79464b8f6dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afe476fe7e8142a9fd6fb9322e6b2c18c41b97c940710ededa79464b8f6dab3->leave($__internal_6afe476fe7e8142a9fd6fb9322e6b2c18c41b97c940710ededa79464b8f6dab3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8d72d52fc1d987d3839e67363632c3515ad8ebd24599c03f288c97f703ae79c = $this->env->getExtension("native_profiler");
        $__internal_d8d72d52fc1d987d3839e67363632c3515ad8ebd24599c03f288c97f703ae79c->enter($__internal_d8d72d52fc1d987d3839e67363632c3515ad8ebd24599c03f288c97f703ae79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d8d72d52fc1d987d3839e67363632c3515ad8ebd24599c03f288c97f703ae79c->leave($__internal_d8d72d52fc1d987d3839e67363632c3515ad8ebd24599c03f288c97f703ae79c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c89ece42080a9ab97300eb1665737fac74aed22fe7a684a02b94c64dc004238f = $this->env->getExtension("native_profiler");
        $__internal_c89ece42080a9ab97300eb1665737fac74aed22fe7a684a02b94c64dc004238f->enter($__internal_c89ece42080a9ab97300eb1665737fac74aed22fe7a684a02b94c64dc004238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c89ece42080a9ab97300eb1665737fac74aed22fe7a684a02b94c64dc004238f->leave($__internal_c89ece42080a9ab97300eb1665737fac74aed22fe7a684a02b94c64dc004238f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62f2d43c0952b25ee61e4d425c0b66a0bee89d1fe009c906c39ea52c44f37589 = $this->env->getExtension("native_profiler");
        $__internal_62f2d43c0952b25ee61e4d425c0b66a0bee89d1fe009c906c39ea52c44f37589->enter($__internal_62f2d43c0952b25ee61e4d425c0b66a0bee89d1fe009c906c39ea52c44f37589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_62f2d43c0952b25ee61e4d425c0b66a0bee89d1fe009c906c39ea52c44f37589->leave($__internal_62f2d43c0952b25ee61e4d425c0b66a0bee89d1fe009c906c39ea52c44f37589_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
