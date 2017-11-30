<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c84967169fe9a9aa1c7b64ce0303def1d0f1eca96696e68769e5a6feef84397e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc2610bbd7cf5d2123b4bf60b1f83ca494c4f92ec6eacb7f6ef54cd483765228 = $this->env->getExtension("native_profiler");
        $__internal_dc2610bbd7cf5d2123b4bf60b1f83ca494c4f92ec6eacb7f6ef54cd483765228->enter($__internal_dc2610bbd7cf5d2123b4bf60b1f83ca494c4f92ec6eacb7f6ef54cd483765228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2610bbd7cf5d2123b4bf60b1f83ca494c4f92ec6eacb7f6ef54cd483765228->leave($__internal_dc2610bbd7cf5d2123b4bf60b1f83ca494c4f92ec6eacb7f6ef54cd483765228_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b61940583d1f5d1891cecd63f5d0d6e6dd643646ee69a9faa4fdd3c92111aa7 = $this->env->getExtension("native_profiler");
        $__internal_8b61940583d1f5d1891cecd63f5d0d6e6dd643646ee69a9faa4fdd3c92111aa7->enter($__internal_8b61940583d1f5d1891cecd63f5d0d6e6dd643646ee69a9faa4fdd3c92111aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b61940583d1f5d1891cecd63f5d0d6e6dd643646ee69a9faa4fdd3c92111aa7->leave($__internal_8b61940583d1f5d1891cecd63f5d0d6e6dd643646ee69a9faa4fdd3c92111aa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4db4f9d38cae4059d2b48506ce0f485971afe323bba5dc09a74cae8a29f6eb67 = $this->env->getExtension("native_profiler");
        $__internal_4db4f9d38cae4059d2b48506ce0f485971afe323bba5dc09a74cae8a29f6eb67->enter($__internal_4db4f9d38cae4059d2b48506ce0f485971afe323bba5dc09a74cae8a29f6eb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4db4f9d38cae4059d2b48506ce0f485971afe323bba5dc09a74cae8a29f6eb67->leave($__internal_4db4f9d38cae4059d2b48506ce0f485971afe323bba5dc09a74cae8a29f6eb67_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f1ad674e05bb3aadfa860709686d2bcb7cd01600a4b0f342fe4d3f660d97884 = $this->env->getExtension("native_profiler");
        $__internal_2f1ad674e05bb3aadfa860709686d2bcb7cd01600a4b0f342fe4d3f660d97884->enter($__internal_2f1ad674e05bb3aadfa860709686d2bcb7cd01600a4b0f342fe4d3f660d97884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f1ad674e05bb3aadfa860709686d2bcb7cd01600a4b0f342fe4d3f660d97884->leave($__internal_2f1ad674e05bb3aadfa860709686d2bcb7cd01600a4b0f342fe4d3f660d97884_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
