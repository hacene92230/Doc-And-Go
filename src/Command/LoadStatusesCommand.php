<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Entity\Statu;
use Doctrine\ORM\EntityManagerInterface;

#[AsCommand(
    name: 'load-statu',
    description: 'Add a short description for your command',
)]
class LoadStatusesCommand extends Command
{
    protected static $defaultName = 'app:load-statuses';
        private $entityManager;
        
        public function __construct(EntityManagerInterface $entityManager)
        {
            $this->entityManager = $entityManager;
    
            parent::__construct();
        }
    
        protected function configure()
        {
            $this
                ->setDescription('Loads predefined statuses into the database.');
        }
    
        protected function execute(InputInterface $input, OutputInterface $output): int
        {
            $statuses = [
                'confirmé',
                'en cours',
                'reporté',
                'annuler',
                'non honoré'
            ];
        
            foreach ($statuses as $statusName) {
                // Vérifie si le statut existe déjà
                $existingStatus = $this->entityManager->getRepository(Statu::class)->findOneBy(['name' => $statusName]);
        
                if (!$existingStatus) {
                    $status = new Statu();
                    $status->setName($statusName);
                    $this->entityManager->persist($status);
                }
            }
        
            $this->entityManager->flush();
        
            $output->writeln('Statuses loaded successfully.');
        
            return Command::SUCCESS;
        }
            }