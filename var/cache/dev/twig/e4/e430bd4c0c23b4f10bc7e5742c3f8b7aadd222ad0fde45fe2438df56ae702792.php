<?php

/* review/new.html.twig */
class __TwigTemplate_8693e18a507d2346b86153ebe7f30012c1cbbc1789b0de9e84f178a647456a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/new.html.twig", 1);
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
        $__internal_728d970c1aff8659a245b39c837f5c5bed1a02215f50fc9e46d41acbb06d0c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728d970c1aff8659a245b39c837f5c5bed1a02215f50fc9e46d41acbb06d0c9d->enter($__internal_728d970c1aff8659a245b39c837f5c5bed1a02215f50fc9e46d41acbb06d0c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $__internal_7cc7bf03fb47cb668ab9a13282ded63def653a7f5ae996bf0b1bc202f28f0a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc7bf03fb47cb668ab9a13282ded63def653a7f5ae996bf0b1bc202f28f0a15->enter($__internal_7cc7bf03fb47cb668ab9a13282ded63def653a7f5ae996bf0b1bc202f28f0a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728d970c1aff8659a245b39c837f5c5bed1a02215f50fc9e46d41acbb06d0c9d->leave($__internal_728d970c1aff8659a245b39c837f5c5bed1a02215f50fc9e46d41acbb06d0c9d_prof);

        
        $__internal_7cc7bf03fb47cb668ab9a13282ded63def653a7f5ae996bf0b1bc202f28f0a15->leave($__internal_7cc7bf03fb47cb668ab9a13282ded63def653a7f5ae996bf0b1bc202f28f0a15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79820fe9d87ef9478578b7a37e4c1f0c9c45df69cbccabbf4d624accd281d435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79820fe9d87ef9478578b7a37e4c1f0c9c45df69cbccabbf4d624accd281d435->enter($__internal_79820fe9d87ef9478578b7a37e4c1f0c9c45df69cbccabbf4d624accd281d435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_789b413c60688b0503f3cb218370dbb0d71651b6af054642c2828f4a2038d4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789b413c60688b0503f3cb218370dbb0d71651b6af054642c2828f4a2038d4e8->enter($__internal_789b413c60688b0503f3cb218370dbb0d71651b6af054642c2828f4a2038d4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_789b413c60688b0503f3cb218370dbb0d71651b6af054642c2828f4a2038d4e8->leave($__internal_789b413c60688b0503f3cb218370dbb0d71651b6af054642c2828f4a2038d4e8_prof);

        
        $__internal_79820fe9d87ef9478578b7a37e4c1f0c9c45df69cbccabbf4d624accd281d435->leave($__internal_79820fe9d87ef9478578b7a37e4c1f0c9c45df69cbccabbf4d624accd281d435_prof);

    }

    public function getTemplateName()
    {
        return "review/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Review creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "review/new.html.twig", "/var/www/html/flyaround/app/Resources/views/review/new.html.twig");
    }
}
