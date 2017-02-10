#http_proxy = ENV["http_proxy"] || ""

pass_variables = ["HTTP_PROXY", "http_proxy", "FTP_PROXY", "ftp_proxy", "HTTPS_PROXY", "https_proxy", "NO_PROXY", "no_proxy"]

Vagrant.configure(2) do |config|
  config.vm.box = "centos/7"
  config.ssh.insert_key = false # Soluciona fallo con ssh gpg key

  config.vm.network "forwarded_port", guest: 3000, host: 13000
  config.vm.network "forwarded_port", guest: 8000, host: 8000
  config.vm.network "forwarded_port", guest: 8080, host: 18080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.69.69"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  config.vm.synced_folder "src", "/home/vagrant/src"

  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end

  # config.vm.provision "shell", inline: <<-SHELL
  #   sudo apt-get update
  #   sudo apt-get install -y apache2
  # SHELL

  string_sudoers="Defaults env_keep += \""
  pass_variables.each do |pass_var|
      config.vm.provision "shell", inline: "echo 'export #{pass_var}=\'#{(ENV[pass_var]||'')}'\' >> ~/.bashrc"
      string_sudoers+="#{pass_var} "
  end
  string_sudoers+="\""
  config.vm.provision "shell", inline: "source ~/.bashrc"
  config.vm.provision "shell", inline: <<-SHELL
    if grep -i proxy /etc/sudoers; then
      echo 'Archivo SUDORES con variables PROXY ya está configurado. Nada que hacer.'
    else
      echo '#{string_sudoers}' >> /etc/sudoers
    fi
  SHELL
  config.vm.provision "shell", inline: "env | grep -i proxy || true"

  scripts_path="scripts/"
  config.vm.provision "shell", path: scripts_path+"set_permisive.sh"
  config.vm.provision "shell", path: scripts_path+"install_utilities.sh"
  config.vm.provider "virtualbox" do |vb|
       config.vm.provision "shell", path: scripts_path+"install_vboxguestaditions.sh"
  end
  config.vm.provision "shell", path: scripts_path+"install_postgresql_postgis.sh"
  config.vm.provision "file", source: "src/sigma4c.sql", destination: "sigma4c.sql"
  config.vm.provision "file", source: "src/userdbsigma4c.sql", destination: "userdbsigma4c.sql"
  config.vm.provision "shell", path: scripts_path+"create_database_proyecto.sh"
  #config.vm.provision "shell", path: scripts_path+"install_gvnix.sh"
  config.vm.provision "shell", path: scripts_path+"install_symfony.sh"
  config.vm.provision "shell", path: scripts_path+"install_composer.sh"
  config.vm.provision "shell", path: scripts_path+"install_sigma4c.sh"
end
