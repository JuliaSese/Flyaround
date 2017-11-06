<?php

/* reservation/edit.html.twig */
class __TwigTemplate_51bdac39dadfe151b30e5b258c233abc43a9159c1487df3a9c9784733ec1b84c extends Twig_Template
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
        $__internal_c52608c5e3ffb0e40ace11796afa0602a40588ad751384d7aca040864e892a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52608c5e3ffb0e40ace11796afa0602a40588ad751384d7aca040864e892a56->enter($__internal_c52608c5e3ffb0e40ace11796afa0602a40588ad751384d7aca040864e892a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_757c4f27a954948efc74629152c7c6a2958c9326a4cb1dd8eba7e15e2dcd1ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757c4f27a954948efc74629152c7c6a2958c9326a4cb1dd8eba7e15e2dcd1ba9->enter($__internal_757c4f27a954948efc74629152c7c6a2958c9326a4cb1dd8eba7e15e2dcd1ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c52608c5e3ffb0e40ace11796afa0602a40588ad751384d7aca040864e892a56->leave($__internal_c52608c5e3ffb0e40ace11796afa0602a40588ad751384d7aca040864e892a56_prof);

        
        $__internal_757c4f27a954948efc74629152c7c6a2958c9326a4cb1dd8eba7e15e2dcd1ba9->leave($__internal_757c4f27a954948efc74629152c7c6a2958c9326a4cb1dd8eba7e15e2dcd1ba9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e43c7cb852b990432e46458dd7f5d50c395826012cd7896670efab7c8f58760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e43c7cb852b990432e46458dd7f5d50c395826012cd7896670efab7c8f58760->enter($__internal_9e43c7cb852b990432e46458dd7f5d50c395826012cd7896670efab7c8f58760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eeff5270461fae74fa3b0e86e1b40d8c86ea463dc0fc5b83a6026dd7a4b3b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eeff5270461fae74fa3b0e86e1b40d8c86ea463dc0fc5b83a6026dd7a4b3b8c->enter($__internal_7eeff5270461fae74fa3b0e86e1b40d8c86ea463dc0fc5b83a6026dd7a4b3b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7eeff5270461fae74fa3b0e86e1b40d8c86ea463dc0fc5b83a6026dd7a4b3b8c->leave($__internal_7eeff5270461fae74fa3b0e86e1b40d8c86ea463dc0fc5b83a6026dd7a4b3b8c_prof);

        
        $__internal_9e43c7cb852b990432e46458dd7f5d50c395826012cd7896670efab7c8f58760->leave($__internal_9e43c7cb852b990432e46458dd7f5d50c395826012cd7896670efab7c8f58760_prof);

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
