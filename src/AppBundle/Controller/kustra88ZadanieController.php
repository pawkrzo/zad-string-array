<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\kustra88ZadanieType;
use kustra88\Tools\Zadanie;
class kustra88ZadanieController extends Controller
{
    /**
     * @Route("/kustra88/zadanie/show/form", name="kustra88_zadanie_show_form")
     */
    public function showFormAction()
    {
        $zadanie = new Zadanie();
        $form = $this->createCreateForm($zadanie);
        return $this->render(
            'AppBundle:kustra88Zadanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/kustra88/zadanie/przetworz", name="kustra88_zadanie_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $zadanie = new Zadanie();
        $form = $this->createCreateForm($zadanie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:kustra88Zadanie:wynik.html.twig',
                array('wynik' => $zadanie->wynik())
            );
        }
        return $this->render(
            'AppBundle:kustra88Zadanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Zadanie $zadanie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Zadanie $zadanie)
    {
        $form = $this->createForm(new kustra88ZadanieType(), $zadanie, array(
            'action' => $this->generateUrl('kustra88_zadanie_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Przetwórz'));
        return $form;
    }
}