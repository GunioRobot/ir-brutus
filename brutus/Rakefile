def get_config(var, file = IO.readlines("./config.rb"))
  file.each do |l|
    return l.split[2] if l.split[0] == var
  end
end

theme_name = get_config("theme_name")
theme_path = get_config("theme_path")

namespace :build do

  desc "Compile sass files"
  task :sass do
    puts "Compiling sass..."
    system("compass compile")
  end

  desc "Copy files to theme dir"
  task :copy do
    puts "Copying files to #{theme_path}/#{theme_name}"
    system("rm -rf #{theme_path}/#{theme_name}")
    system("cp -r brutus #{theme_path}/#{theme_name}")
  end

end

desc "build theme files (compile and move to theme dir)"
task :build => ["build:sass", "build:copy"]
