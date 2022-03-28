<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* literature/read.html.twig */
class __TwigTemplate_d378e75930693bbadf465295b18eaee6f9e8e432bf627b0c55df55fa1f36dd8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'literatureActive' => [$this, 'block_literatureActive'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "literature/read.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "literature/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello LiteratureController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_literatureActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "literatureActive"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 90%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .content-block div {
        margin: 2rem 0;
    }

    .content-block div p {
        margin: 0;
        line-height: 2rem
    }
</style>

<div class=\"example-wrapper\">
    <h1>Présentation de la Poésie</h1>
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_browse");
        echo "\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
    ";
        // line 25
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 25, $this->source); })()), "displayable", [], "any", false, false, false, 25) === true)) {
            // line 26
            echo "        <p class=\"error-message\" style=\"color: red; margin: 3rem 0; text-align: center\">Il manque des informations pour pouvoir afficher la news sur le site !</p>
        <ul>
            ";
            // line 28
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28) == null)) ? ("<li>Manque le titre de la citation/poésie</li>") : (""));
            echo "
            ";
            // line 29
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 29, $this->source); })()), "author", [], "any", false, false, false, 29) == null)) ? ("<li>Manque l'autrice/auteur</li>") : (""));
            echo "
            ";
            // line 30
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 30, $this->source); })()), "textstyle", [], "any", false, false, false, 30) == null)) ? ("<li>Manque le style de citations/poésie</li>") : (""));
            echo "
            ";
            // line 31
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31) == null)) ? ("<li>Manque le contenu</li>") : (""));
            echo "
        </ul>
    ";
        }
        // line 34
        echo "    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Supprimer Citation/Poésie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
        echo " ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <h2 style=\"margin: 2rem 0\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        echo "</h2>
    <h3 style=\"margin: 2rem 0\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 45, $this->source); })()), "author", [], "any", false, false, false, 45), "html", null, true);
        echo "<h3>
    <div class=\"content-block\" style=\"font-size: 1.3rem; line-height: 2rem; margin-bottom: 1.5rem;\">";
        // line 46
        echo twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 46, $this->source); })()), "content", [], "any", false, false, false, 46);
        echo "</div>
    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Supprimer Citation/Poésie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["literature"]) || array_key_exists("literature", $context) ? $context["literature"] : (function () { throw new RuntimeError('Variable "literature" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), "html", null, true);
        echo " ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_browse");
        echo "\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "literature/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 57,  188 => 53,  182 => 52,  176 => 49,  172 => 48,  167 => 46,  163 => 45,  159 => 44,  152 => 40,  146 => 39,  140 => 36,  136 => 35,  133 => 34,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 26,  109 => 25,  105 => 24,  87 => 8,  80 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LiteratureController!{% endblock %}

{% block literatureActive %}active{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 90%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .content-block div {
        margin: 2rem 0;
    }

    .content-block div p {
        margin: 0;
        line-height: 2rem
    }
</style>

<div class=\"example-wrapper\">
    <h1>Présentation de la Poésie</h1>
    <a href=\"{{ path('literature_browse') }}\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
    {% if literature.displayable is not same as true %}
        <p class=\"error-message\" style=\"color: red; margin: 3rem 0; text-align: center\">Il manque des informations pour pouvoir afficher la news sur le site !</p>
        <ul>
            {{ literature.title == null ? '<li>Manque le titre de la citation/poésie</li>' }}
            {{ literature.author == null ? '<li>Manque l\\'autrice/auteur</li>' }}
            {{ literature.textstyle == null ? '<li>Manque le style de citations/poésie</li>' }}
            {{ literature.content == null ? '<li>Manque le contenu</li>' }}
        </ul>
    {% endif %}
    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"{{ path('literature_edit', {id: literature.id}) }}\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-edit-item') }}\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"{{ path('literature_delete', {id: literature.id}) }}\" onsubmit=\"return confirm('Supprimer Citation/Poésie {{ literature.title }} ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <h2 style=\"margin: 2rem 0\">{{ literature.title }}</h2>
    <h3 style=\"margin: 2rem 0\">{{ literature.author }}<h3>
    <div class=\"content-block\" style=\"font-size: 1.3rem; line-height: 2rem; margin-bottom: 1.5rem;\">{{ literature.content|raw }}</div>
    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"{{ path('literature_edit', {id: literature.id}) }}\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-edit-item') }}\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"{{ path('literature_delete', {id: literature.id}) }}\" onsubmit=\"return confirm('Supprimer Citation/Poésie {{ literature.title }} ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <a href=\"{{ path('literature_browse') }}\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
</div>
{% endblock %}
", "literature/read.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\literature\\read.html.twig");
    }
}
