<?php

/* reservation/edit.html.twig */
class __TwigTemplate_c8dbde76744ac0f6834ae4c29a923883005a8ca41041e5057c084be15dc7d6c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b68c3dd5ac30405af6d6d77d0f081f00b299af892ac8c48873970486b21a407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b68c3dd5ac30405af6d6d77d0f081f00b299af892ac8c48873970486b21a407->enter($__internal_0b68c3dd5ac30405af6d6d77d0f081f00b299af892ac8c48873970486b21a407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_2a0ad487ad9090c755f53e124f63459d23fadd5a8040a60b6184b7bf0994a760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0ad487ad9090c755f53e124f63459d23fadd5a8040a60b6184b7bf0994a760->enter($__internal_2a0ad487ad9090c755f53e124f63459d23fadd5a8040a60b6184b7bf0994a760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b68c3dd5ac30405af6d6d77d0f081f00b299af892ac8c48873970486b21a407->leave($__internal_0b68c3dd5ac30405af6d6d77d0f081f00b299af892ac8c48873970486b21a407_prof);

        
        $__internal_2a0ad487ad9090c755f53e124f63459d23fadd5a8040a60b6184b7bf0994a760->leave($__internal_2a0ad487ad9090c755f53e124f63459d23fadd5a8040a60b6184b7bf0994a760_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_633576ae564af89e019cb7df985abcb7d63fbcec19cf961ca04b584b4c2f141e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633576ae564af89e019cb7df985abcb7d63fbcec19cf961ca04b584b4c2f141e->enter($__internal_633576ae564af89e019cb7df985abcb7d63fbcec19cf961ca04b584b4c2f141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f988387eae29b72424db6374dd38dce3077785f62368414ada0c3f67698bdb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f988387eae29b72424db6374dd38dce3077785f62368414ada0c3f67698bdb25->enter($__internal_f988387eae29b72424db6374dd38dce3077785f62368414ada0c3f67698bdb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f988387eae29b72424db6374dd38dce3077785f62368414ada0c3f67698bdb25->leave($__internal_f988387eae29b72424db6374dd38dce3077785f62368414ada0c3f67698bdb25_prof);

        
        $__internal_633576ae564af89e019cb7df985abcb7d63fbcec19cf961ca04b584b4c2f141e->leave($__internal_633576ae564af89e019cb7df985abcb7d63fbcec19cf961ca04b584b4c2f141e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservation/edit.html.twig", "/var/www/html/flyaround/app/Resources/views/reservation/edit.html.twig");
    }
}
