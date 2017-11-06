<?php

/* user/show.html.twig */
class __TwigTemplate_100e6b2aca92d10645fbb3bb2fa4b274b9da37f2f4f2caa67adf45b8bc7ef3ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_6d4da1e2bcf46310f4ee63d88d1725a2d75b5091030167520a27cd76f99eb091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4da1e2bcf46310f4ee63d88d1725a2d75b5091030167520a27cd76f99eb091->enter($__internal_6d4da1e2bcf46310f4ee63d88d1725a2d75b5091030167520a27cd76f99eb091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_bb1f56bbd796ddd57a1a3ad8c884f05242cfc2a9c9510e5ca98a086c15643055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1f56bbd796ddd57a1a3ad8c884f05242cfc2a9c9510e5ca98a086c15643055->enter($__internal_bb1f56bbd796ddd57a1a3ad8c884f05242cfc2a9c9510e5ca98a086c15643055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4da1e2bcf46310f4ee63d88d1725a2d75b5091030167520a27cd76f99eb091->leave($__internal_6d4da1e2bcf46310f4ee63d88d1725a2d75b5091030167520a27cd76f99eb091_prof);

        
        $__internal_bb1f56bbd796ddd57a1a3ad8c884f05242cfc2a9c9510e5ca98a086c15643055->leave($__internal_bb1f56bbd796ddd57a1a3ad8c884f05242cfc2a9c9510e5ca98a086c15643055_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3efef6592025faaa9c24f5bbeda5633578c75a226eff24304b18fa5ad19f59c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efef6592025faaa9c24f5bbeda5633578c75a226eff24304b18fa5ad19f59c7->enter($__internal_3efef6592025faaa9c24f5bbeda5633578c75a226eff24304b18fa5ad19f59c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88535b612b029f097a3e0923b17b4213f5205f4d2c51da1feabaa6f552489197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88535b612b029f097a3e0923b17b4213f5205f4d2c51da1feabaa6f552489197->enter($__internal_88535b612b029f097a3e0923b17b4213f5205f4d2c51da1feabaa6f552489197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "userName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "birthDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "birthDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->getSourceContext()); })()), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->getSourceContext()); })()), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->getSourceContext()); })()), "role", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "note", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reviews</th>
                <td>";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 46, $this->getSourceContext()); })()), "reviews", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "reviewAuthor", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
            </tr>
            <tr>
                <th>Isacertifiedpilot</th>
                <td>";
        // line 50
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 50, $this->getSourceContext()); })()), "isACertifiedPilot", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 54
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 54, $this->getSourceContext()); })()), "isActive", array())) {
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
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 67, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_88535b612b029f097a3e0923b17b4213f5205f4d2c51da1feabaa6f552489197->leave($__internal_88535b612b029f097a3e0923b17b4213f5205f4d2c51da1feabaa6f552489197_prof);

        
        $__internal_3efef6592025faaa9c24f5bbeda5633578c75a226eff24304b18fa5ad19f59c7->leave($__internal_3efef6592025faaa9c24f5bbeda5633578c75a226eff24304b18fa5ad19f59c7_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 69,  176 => 67,  170 => 64,  164 => 61,  150 => 54,  139 => 50,  124 => 46,  117 => 42,  110 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.userName }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ user.firstName }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ user.lastName }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>{% if user.birthDate %}{{ user.birthDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>{% if user.creationDate %}{{ user.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ user.role }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ user.note }}</td>
            </tr>
            <tr>
                <th>Reviews</th>
                <td>{%for review in user.reviews %}{{review.reviewAuthor}} {%endfor%}</td>
            </tr>
            <tr>
                <th>Isacertifiedpilot</th>
                <td>{% if user.isACertifiedPilot %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/var/www/html/flyaround/app/Resources/views/user/show.html.twig");
    }
}
