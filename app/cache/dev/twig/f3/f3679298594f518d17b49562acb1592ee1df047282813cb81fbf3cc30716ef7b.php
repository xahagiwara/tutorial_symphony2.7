<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Concert/index.html.twig */
class __TwigTemplate_b67b562e171a9bebd8a7422df49b11c0415c7ba5843303d568f1da1eef67a7e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Concert/index.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
    <div>
        <h1>公開講演</h1>
        <ul>
            <!--　for文：for 変数 in 代入元変数-->
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["concertList"] ?? $this->getContext($context, "concertList")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["concertInfo"]) {
            // line 10
            echo "                <li>
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "data", []), "html", null, true);
            echo "
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "place", []), "html", null, true);
            echo "
                    <!-- if文：if 判定式-->
                    ";
            // line 15
            if (($this->getAttribute($context["concertInfo"], "available", []) == "true")) {
                // line 16
                echo "                        （予約可能）
                    ";
            } else {
                // line 18
                echo "                        （満席）
                    ";
            }
            // line 20
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "time", []), "html", null, true);
            echo "開演
                </li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concertInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </ul>
    </div>    
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Concert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  86 => 20,  82 => 18,  78 => 16,  76 => 15,  71 => 13,  67 => 12,  63 => 11,  60 => 10,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
</head>
<body>
    <div>
        <h1>公開講演</h1>
        <ul>
            <!--　for文：for 変数 in 代入元変数-->
            {% for concertInfo in concertList %}
                <li>
                    {{ loop.index }}
                    {{ concertInfo.data }}
                    {{ concertInfo.place }}
                    <!-- if文：if 判定式-->
                    {% if concertInfo.available == 'true' %}
                        （予約可能）
                    {% else %}
                        （満席）
                    {% endif %}
                    {{ concertInfo.time }}開演
                </li>
            {% endfor %}
        </ul>
    </div>    
</body>
</html>", "Concert/index.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Concert/index.html.twig");
    }
}
