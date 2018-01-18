<?php

/* :user:show.html.twig */
class __TwigTemplate_12bbea067e3e1d4e74ccb33a83d68f7d8c8c3583978552ac046a611e77021765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_a2d2a9351d44addddc82b27bc21c119ab8d59e9eaa2cce9708d87d3c2545270b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d2a9351d44addddc82b27bc21c119ab8d59e9eaa2cce9708d87d3c2545270b->enter($__internal_a2d2a9351d44addddc82b27bc21c119ab8d59e9eaa2cce9708d87d3c2545270b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_dd04732f2263cd11e00a88ce014f913a0972de5c16c9eedb379755f961467d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd04732f2263cd11e00a88ce014f913a0972de5c16c9eedb379755f961467d92->enter($__internal_dd04732f2263cd11e00a88ce014f913a0972de5c16c9eedb379755f961467d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d2a9351d44addddc82b27bc21c119ab8d59e9eaa2cce9708d87d3c2545270b->leave($__internal_a2d2a9351d44addddc82b27bc21c119ab8d59e9eaa2cce9708d87d3c2545270b_prof);

        
        $__internal_dd04732f2263cd11e00a88ce014f913a0972de5c16c9eedb379755f961467d92->leave($__internal_dd04732f2263cd11e00a88ce014f913a0972de5c16c9eedb379755f961467d92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aff9439df5292a4789737518a996f00790b880cbff261e3cb9687599354f1bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff9439df5292a4789737518a996f00790b880cbff261e3cb9687599354f1bbb->enter($__internal_aff9439df5292a4789737518a996f00790b880cbff261e3cb9687599354f1bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08bb26b28d13f466189d9024a5d57f573c2add52bf706f6132ef22216d2b9695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb26b28d13f466189d9024a5d57f573c2add52bf706f6132ef22216d2b9695->enter($__internal_08bb26b28d13f466189d9024a5d57f573c2add52bf706f6132ef22216d2b9695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "userName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "birthDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "birthDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "role", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isacertifiedpilot</th>
                <td>";
        // line 46
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "isACertifiedPilot", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 50
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "isActive", array())) {
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_08bb26b28d13f466189d9024a5d57f573c2add52bf706f6132ef22216d2b9695->leave($__internal_08bb26b28d13f466189d9024a5d57f573c2add52bf706f6132ef22216d2b9695_prof);

        
        $__internal_aff9439df5292a4789737518a996f00790b880cbff261e3cb9687599354f1bbb->leave($__internal_aff9439df5292a4789737518a996f00790b880cbff261e3cb9687599354f1bbb_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  161 => 63,  155 => 60,  149 => 57,  135 => 50,  124 => 46,  117 => 42,  110 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
", ":user:show.html.twig", "/var/www/html/flyaround/app/Resources/views/user/show.html.twig");
    }
}
