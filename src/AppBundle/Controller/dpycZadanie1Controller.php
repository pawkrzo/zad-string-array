<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\dpycZadanie1Type;
use dpyc\Tools\Zadanie1;
class dpycZadanie1Controller extends Controller
{
    /**
     * @Route("/dpyc/zadanie/show/form", name="dpyc_zadanie_show_form")
     */
    public function showFormAction()
    {
        $zadanie = new Zadanie();
        $form = $this->createCreateForm($zadanie);
        return $this->render(
            'AppBundle:dpycZadanie1:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/dpyc/zadanie/przetworz", name="dpyc_zadanie_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $zadanie = new Zadanie1();
        $form = $this->createCreateForm($zadanie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:dpycZadanie1:wynik.html.twig',
                array('wynik' => $zadanie->wynik())
            );
        }
        return $this->render(
            'AppBundle:dpycZadanie1:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Zadanie1 $zadanie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Zadanie1 $zadanie)
    {
        $form = $this->createForm(new dpycZadanie1Type(), $zadanie, array(
            'action' => $this->generateUrl('dpyc_zadanie_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Przetwórz'));
        return $form;
    }
}