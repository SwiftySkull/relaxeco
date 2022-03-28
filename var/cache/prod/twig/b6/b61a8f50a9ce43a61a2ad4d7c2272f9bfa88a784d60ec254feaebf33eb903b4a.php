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

/* seances/index.html.twig */
class __TwigTemplate_991ad3888ec4d9afa822113c416c194d57c267f6566c75a59856435f885f60d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seancesActive' => [$this, 'block_seancesActive'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "seances/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello SeancesController!";
    }

    // line 5
    public function block_seancesActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "active";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 100%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 style=\"margin-bottom: 2rem\">Liste des séances</h1>

    <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_add");
        echo "\" style=\"margin-bottom: 3rem\" method=\"POST\">
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
        <button class=\"btn btn-success\">Ajouter une séance</button>
    </form>

    <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin: 1rem 0\">
        <p style=\"width: 5%\">#</p>
        <p style=\"width: 30%\">Nom</p>
        <p style=\"width: 10%\">Durée</p>
        <p style=\"width: 10%\">Prix</p>
        <p style=\"width: 20%\">Catégorie</p>
        <p style=\"width: 30%; margin-left: 4rem;\">Actions</p>
    </div>
    <div>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seances"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
            // line 31
            echo "            <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin-bottom: 1rem; padding-bottom: 1rem\">
                <p style=\"width: 5%\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                <p style=\"width: 30%\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                <p style=\"width: 10%\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "duration", [], "any", false, false, false, 34), "html", null, true);
            echo "min</p>
                <p style=\"width: 10%\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "€</p>
                <p style=\"width: 20%\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sea"], "population", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                <div style=\"width: 30%; margin-left: 4rem; display:flex\">
                    <div style=\"position: relative; margin-right: 1rem\">
                        <form action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_display", ["id" => twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("display-item"), "html", null, true);
            echo "\"/>
                            ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["sea"], "displayOnWebsite", [], "any", false, false, false, 41) === true)) {
                // line 42
                echo "                                <button class=\"btn btn-secondary\">Enlever du site</button>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["sea"], "displayOnWebsite", [], "any", false, false, false, 43) === false)) {
                // line 44
                echo "                                <button class=\"btn btn-primary\">Ajouter au site</button>
                            ";
            }
            // line 46
            echo "                        </form>
                        ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["sea"], "displayable", [], "any", false, false, false, 47) === false)) {
                // line 48
                echo "                            <div style=\"height: 100%; width: 100%; overflow: hidden; position: absolute; top: 0;\">
                                <div style=\"position: absolute; height: 10px; width: 200%; background-color: red; top: 50%; left: -50%; transform: rotate(25deg); z-index: 5\"></div>
                                <div style=\"height: 100%; width: 100%; position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.6); border-radius: 5px;\"></div>
                            </div>
                        ";
            }
            // line 53
            echo "                    </div>
                    <form action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" style=\"margin-right: 1rem\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
            echo "\"/>
                        <button class=\"btn btn-warning\">Modifier</button>
                    </form>
                    <form action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Supprimer séance ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo " ?')\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            echo "\"/>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "seances/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 65,  175 => 59,  169 => 58,  163 => 55,  159 => 54,  156 => 53,  149 => 48,  147 => 47,  144 => 46,  140 => 44,  138 => 43,  135 => 42,  133 => 41,  129 => 40,  125 => 39,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  100 => 31,  96 => 30,  80 => 17,  76 => 16,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "seances/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\seances\\index.html.twig");
    }
}
