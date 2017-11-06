<?php

/* review/show.html.twig */
class __TwigTemplate_34df0847a8704da52d0eae438ed04c2f0fd6a8a61ed2ecd61606c96d79b26220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/show.html.twig", 1);
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
        $__internal_7d280280d3a8c200bc74b5fb5aac85e04f9f165cff25ce560ee4cac3d88cfe2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d280280d3a8c200bc74b5fb5aac85e04f9f165cff25ce560ee4cac3d88cfe2a->enter($__internal_7d280280d3a8c200bc74b5fb5aac85e04f9f165cff25ce560ee4cac3d88cfe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $__internal_7d64fceda4820d643d5954b87dfa59690301d050b850daaf2797c93f305009e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d64fceda4820d643d5954b87dfa59690301d050b850daaf2797c93f305009e5->enter($__internal_7d64fceda4820d643d5954b87dfa59690301d050b850daaf2797c93f305009e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d280280d3a8c200bc74b5fb5aac85e04f9f165cff25ce560ee4cac3d88cfe2a->leave($__internal_7d280280d3a8c200bc74b5fb5aac85e04f9f165cff25ce560ee4cac3d88cfe2a_prof);

        
        $__internal_7d64fceda4820d643d5954b87dfa59690301d050b850daaf2797c93f305009e5->leave($__internal_7d64fceda4820d643d5954b87dfa59690301d050b850daaf2797c93f305009e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8874ad484ebfb0719dccefa3e56895e2499377ceffa363b1c56e1a26bc8fabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8874ad484ebfb0719dccefa3e56895e2499377ceffa363b1c56e1a26bc8fabf->enter($__internal_a8874ad484ebfb0719dccefa3e56895e2499377ceffa363b1c56e1a26bc8fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_977356d577e8a54bba8574df51c004138b697867f2a6e5914f7db1e6fb13ae7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977356d577e8a54bba8574df51c004138b697867f2a6e5914f7db1e6fb13ae7e->enter($__internal_977356d577e8a54bba8574df51c004138b697867f2a6e5914f7db1e6fb13ae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 14, $this->getSourceContext()); })()), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userrated</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 18, $this->getSourceContext()); })()), "userRated", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 22, $this->getSourceContext()); })()), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 22, $this->getSourceContext()); })()), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 26, $this->getSourceContext()); })()), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 36, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_977356d577e8a54bba8574df51c004138b697867f2a6e5914f7db1e6fb13ae7e->leave($__internal_977356d577e8a54bba8574df51c004138b697867f2a6e5914f7db1e6fb13ae7e_prof);

        
        $__internal_a8874ad484ebfb0719dccefa3e56895e2499377ceffa363b1c56e1a26bc8fabf->leave($__internal_a8874ad484ebfb0719dccefa3e56895e2499377ceffa363b1c56e1a26bc8fabf_prof);

    }

    public function getTemplateName()
    {
        return "review/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  109 => 39,  103 => 36,  97 => 33,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Review</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ review.id }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ review.text }}</td>
            </tr>
            <tr>
                <th>Userrated</th>
                <td>{{ review.userRated }}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ review.note }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('review_edit', { 'id': review.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "review/show.html.twig", "/var/www/html/flyaround/app/Resources/views/review/show.html.twig");
    }
}
