<?php

/* base.html.twig */
class __TwigTemplate_1b602e0a344f4950089db47f2441f57f72dd20e3ed51c0e189b447d2120ff4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5352f9c6f241ba1fb7f0238236677d5a79c7834c1b08d38dfa9e5eb13cab705 = $this->env->getExtension("native_profiler");
        $__internal_a5352f9c6f241ba1fb7f0238236677d5a79c7834c1b08d38dfa9e5eb13cab705->enter($__internal_a5352f9c6f241ba1fb7f0238236677d5a79c7834c1b08d38dfa9e5eb13cab705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a5352f9c6f241ba1fb7f0238236677d5a79c7834c1b08d38dfa9e5eb13cab705->leave($__internal_a5352f9c6f241ba1fb7f0238236677d5a79c7834c1b08d38dfa9e5eb13cab705_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_488e065f30b2cfcd6682791ae16c38d2a8764d75fbc732f169ee3bb051c77d6c = $this->env->getExtension("native_profiler");
        $__internal_488e065f30b2cfcd6682791ae16c38d2a8764d75fbc732f169ee3bb051c77d6c->enter($__internal_488e065f30b2cfcd6682791ae16c38d2a8764d75fbc732f169ee3bb051c77d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_488e065f30b2cfcd6682791ae16c38d2a8764d75fbc732f169ee3bb051c77d6c->leave($__internal_488e065f30b2cfcd6682791ae16c38d2a8764d75fbc732f169ee3bb051c77d6c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6efdee558334d5d78587c6db2460528e513db9b65a27a1a6417ece06a4c66b89 = $this->env->getExtension("native_profiler");
        $__internal_6efdee558334d5d78587c6db2460528e513db9b65a27a1a6417ece06a4c66b89->enter($__internal_6efdee558334d5d78587c6db2460528e513db9b65a27a1a6417ece06a4c66b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6efdee558334d5d78587c6db2460528e513db9b65a27a1a6417ece06a4c66b89->leave($__internal_6efdee558334d5d78587c6db2460528e513db9b65a27a1a6417ece06a4c66b89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5c703dbd93a162b54ea9bc09c8123c4b20e1f512900a631c2560863ae2eaa76 = $this->env->getExtension("native_profiler");
        $__internal_c5c703dbd93a162b54ea9bc09c8123c4b20e1f512900a631c2560863ae2eaa76->enter($__internal_c5c703dbd93a162b54ea9bc09c8123c4b20e1f512900a631c2560863ae2eaa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5c703dbd93a162b54ea9bc09c8123c4b20e1f512900a631c2560863ae2eaa76->leave($__internal_c5c703dbd93a162b54ea9bc09c8123c4b20e1f512900a631c2560863ae2eaa76_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d564c18d3371c39c5487a51dec70cb8c2d68279df51b1e489886040f92880ab = $this->env->getExtension("native_profiler");
        $__internal_2d564c18d3371c39c5487a51dec70cb8c2d68279df51b1e489886040f92880ab->enter($__internal_2d564c18d3371c39c5487a51dec70cb8c2d68279df51b1e489886040f92880ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2d564c18d3371c39c5487a51dec70cb8c2d68279df51b1e489886040f92880ab->leave($__internal_2d564c18d3371c39c5487a51dec70cb8c2d68279df51b1e489886040f92880ab_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
