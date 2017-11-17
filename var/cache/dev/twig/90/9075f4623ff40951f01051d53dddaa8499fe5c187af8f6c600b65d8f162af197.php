<?php

/* :user:edit.html.twig */
class __TwigTemplate_6dfe6b35cfe43475edbcd52f03a3cc56afe2a66a308fefa1407c94c069938308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_c5e2e1e10d8f085489ce18b4b94133e208c5e03595ae1275b08b166f6c52f1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e2e1e10d8f085489ce18b4b94133e208c5e03595ae1275b08b166f6c52f1bb->enter($__internal_c5e2e1e10d8f085489ce18b4b94133e208c5e03595ae1275b08b166f6c52f1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_e97deabf505e1af2609af100db4fd9e09e3b93bea8accc2104606a084ac51eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97deabf505e1af2609af100db4fd9e09e3b93bea8accc2104606a084ac51eaf->enter($__internal_e97deabf505e1af2609af100db4fd9e09e3b93bea8accc2104606a084ac51eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e2e1e10d8f085489ce18b4b94133e208c5e03595ae1275b08b166f6c52f1bb->leave($__internal_c5e2e1e10d8f085489ce18b4b94133e208c5e03595ae1275b08b166f6c52f1bb_prof);

        
        $__internal_e97deabf505e1af2609af100db4fd9e09e3b93bea8accc2104606a084ac51eaf->leave($__internal_e97deabf505e1af2609af100db4fd9e09e3b93bea8accc2104606a084ac51eaf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_011b16c26c61da64651f6e135340fa3a4b05cc2d8e4ee356607040713312d578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011b16c26c61da64651f6e135340fa3a4b05cc2d8e4ee356607040713312d578->enter($__internal_011b16c26c61da64651f6e135340fa3a4b05cc2d8e4ee356607040713312d578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f43f1cd7bb6dc8cbe1b9687bd42995132dea2e10fc2aa908b9ee5d3fa3a46ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43f1cd7bb6dc8cbe1b9687bd42995132dea2e10fc2aa908b9ee5d3fa3a46ced->enter($__internal_f43f1cd7bb6dc8cbe1b9687bd42995132dea2e10fc2aa908b9ee5d3fa3a46ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
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
        
        $__internal_f43f1cd7bb6dc8cbe1b9687bd42995132dea2e10fc2aa908b9ee5d3fa3a46ced->leave($__internal_f43f1cd7bb6dc8cbe1b9687bd42995132dea2e10fc2aa908b9ee5d3fa3a46ced_prof);

        
        $__internal_011b16c26c61da64651f6e135340fa3a4b05cc2d8e4ee356607040713312d578->leave($__internal_011b16c26c61da64651f6e135340fa3a4b05cc2d8e4ee356607040713312d578_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/var/www/html/flyaround/app/Resources/views/user/edit.html.twig");
    }
}
