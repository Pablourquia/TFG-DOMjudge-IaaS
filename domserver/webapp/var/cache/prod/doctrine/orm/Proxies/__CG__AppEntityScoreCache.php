<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ScoreCache extends \App\Entity\ScoreCache implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'submissions_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'pending_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'is_correct_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'solvetime_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'submissions_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'pending_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'is_correct_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'solvetime_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'is_first_to_solve', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'team', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'problem'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'submissions_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'pending_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'is_correct_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'solvetime_restricted', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'submissions_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'pending_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'is_correct_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'solvetime_public', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'is_first_to_solve', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'team', '' . "\0" . 'App\\Entity\\ScoreCache' . "\0" . 'problem'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ScoreCache $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setSubmissionsRestricted(int $submissionsRestricted): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmissionsRestricted', [$submissionsRestricted]);

        return parent::setSubmissionsRestricted($submissionsRestricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissionsRestricted(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissionsRestricted', []);

        return parent::getSubmissionsRestricted();
    }

    /**
     * {@inheritDoc}
     */
    public function setPendingRestricted(int $pendingRestricted): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPendingRestricted', [$pendingRestricted]);

        return parent::setPendingRestricted($pendingRestricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getPendingRestricted(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPendingRestricted', []);

        return parent::getPendingRestricted();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsCorrectRestricted(bool $isCorrectRestricted): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsCorrectRestricted', [$isCorrectRestricted]);

        return parent::setIsCorrectRestricted($isCorrectRestricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCorrectRestricted(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCorrectRestricted', []);

        return parent::getIsCorrectRestricted();
    }

    /**
     * {@inheritDoc}
     */
    public function setSolvetimeRestricted($solvetimeRestricted): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolvetimeRestricted', [$solvetimeRestricted]);

        return parent::setSolvetimeRestricted($solvetimeRestricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolvetimeRestricted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolvetimeRestricted', []);

        return parent::getSolvetimeRestricted();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmissionsPublic(int $submissionsPublic): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmissionsPublic', [$submissionsPublic]);

        return parent::setSubmissionsPublic($submissionsPublic);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissionsPublic(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissionsPublic', []);

        return parent::getSubmissionsPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setPendingPublic(int $pendingPublic): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPendingPublic', [$pendingPublic]);

        return parent::setPendingPublic($pendingPublic);
    }

    /**
     * {@inheritDoc}
     */
    public function getPendingPublic(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPendingPublic', []);

        return parent::getPendingPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsCorrectPublic(bool $isCorrectPublic): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsCorrectPublic', [$isCorrectPublic]);

        return parent::setIsCorrectPublic($isCorrectPublic);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCorrectPublic(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCorrectPublic', []);

        return parent::getIsCorrectPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setSolvetimePublic($solvetimePublic): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolvetimePublic', [$solvetimePublic]);

        return parent::setSolvetimePublic($solvetimePublic);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolvetimePublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolvetimePublic', []);

        return parent::getSolvetimePublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFirstToSolve(bool $isFirstToSolve): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFirstToSolve', [$isFirstToSolve]);

        return parent::setIsFirstToSolve($isFirstToSolve);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFirstToSolve(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFirstToSolve', []);

        return parent::getIsFirstToSolve();
    }

    /**
     * {@inheritDoc}
     */
    public function setContest(\App\Entity\Contest $contest = NULL): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContest', [$contest]);

        return parent::setContest($contest);
    }

    /**
     * {@inheritDoc}
     */
    public function getContest(): \App\Entity\Contest
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContest', []);

        return parent::getContest();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeam(\App\Entity\Team $team = NULL): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeam', [$team]);

        return parent::setTeam($team);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeam(): \App\Entity\Team
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeam', []);

        return parent::getTeam();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblem(\App\Entity\Problem $problem = NULL): \App\Entity\ScoreCache
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblem', [$problem]);

        return parent::setProblem($problem);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblem(): \App\Entity\Problem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblem', []);

        return parent::getProblem();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissions(bool $restricted): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissions', [$restricted]);

        return parent::getSubmissions($restricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getPending(bool $restricted): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPending', [$restricted]);

        return parent::getPending($restricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolveTime(bool $restricted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolveTime', [$restricted]);

        return parent::getSolveTime($restricted);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCorrect(bool $restricted): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCorrect', [$restricted]);

        return parent::getIsCorrect($restricted);
    }

}
