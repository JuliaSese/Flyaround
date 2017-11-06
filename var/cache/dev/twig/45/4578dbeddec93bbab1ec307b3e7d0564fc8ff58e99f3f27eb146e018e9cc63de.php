<?php

/* planemodel/show.html.twig */
class __TwigTemplate_30be81efe71630c8baf2f07ccf491bdc3c32eaf60d21c0f7b15d61b65c9b0b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planemodel/show.html.twig", 1);
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
        $__internal_3f204b03e80dd842f88f82c1cf6d289fcaa1e803e1b10f8f20c83475901e8d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f204b03e80dd842f88f82c1cf6d289fcaa1e803e1b10f8f20c83475901e8d7a->enter($__internal_3f204b03e80dd842f88f82c1cf6d289fcaa1e803e1b10f8f20c83475901e8d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/show.html.twig"));

        $__internal_c6c32e8409e5c6407b29ebbe77eba9bfe543c3e3bb258694e2fb668ba9d77ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c32e8409e5c6407b29ebbe77eba9bfe543c3e3bb258694e2fb668ba9d77ced->enter($__internal_c6c32e8409e5c6407b29ebbe77eba9bfe543c3e3bb258694e2fb668ba9d77ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f204b03e80dd842f88f82c1cf6d289fcaa1e803e1b10f8f20c83475901e8d7a->leave($__internal_3f204b03e80dd842f88f82c1cf6d289fcaa1e803e1b10f8f20c83475901e8d7a_prof);

        
        $__internal_c6c32e8409e5c6407b29ebbe77eba9bfe543c3e3bb258694e2fb668ba9d77ced->leave($__internal_c6c32e8409e5c6407b29ebbe77eba9bfe543c3e3bb258694e2fb668ba9d77ced_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7c245a85012f7d0bab2f6bca58c176da9519816a4a596951de093650de6fe01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c245a85012f7d0bab2f6bca58c176da9519816a4a596951de093650de6fe01->enter($__internal_b7c245a85012f7d0bab2f6bca58c176da9519816a4a596951de093650de6fe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c33fd2e4c29ee22e0558a0276f9ee9ed30069647534d201cfcb49abf359cff1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33fd2e4c29ee22e0558a0276f9ee9ed30069647534d201cfcb49abf359cff1f->enter($__internal_c33fd2e4c29ee22e0558a0276f9ee9ed30069647534d201cfcb49abf359cff1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 14, $this->getSourceContext()); })()), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 18, $this->getSourceContext()); })()), "manufacturer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 22, $this->getSourceContext()); })()), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Planenbseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 26, $this->getSourceContext()); })()), "planeNbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isavailable</th>
                <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 30, $this->getSourceContext()); })()), "isAvailable", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["planeModel"]) || array_key_exists("planeModel", $context) ? $context["planeModel"] : (function () { throw new Twig_Error_Runtime('Variable "planeModel" does not exist.', 40, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c33fd2e4c29ee22e0558a0276f9ee9ed30069647534d201cfcb49abf359cff1f->leave($__internal_c33fd2e4c29ee22e0558a0276f9ee9ed30069647534d201cfcb49abf359cff1f_prof);

        
        $__internal_b7c245a85012f7d0bab2f6bca58c176da9519816a4a596951de093650de6fe01->leave($__internal_b7c245a85012f7d0bab2f6bca58c176da9519816a4a596951de093650de6fe01_prof);

    }

    public function getTemplateName()
    {
        return "planemodel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  112 => 40,  106 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ planeModel.id }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ planeModel.model }}</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>{{ planeModel.manufacturer }}</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>{{ planeModel.cruiseSpeed }}</td>
            </tr>
            <tr>
                <th>Planenbseats</th>
                <td>{{ planeModel.planeNbSeats }}</td>
            </tr>
            <tr>
                <th>Isavailable</th>
                <td>{% if planeModel.isAvailable %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('planemodel_edit', { 'id': planeModel.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "planemodel/show.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/show.html.twig");
    }
}
